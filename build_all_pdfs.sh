#!/usr/bin/env bash

echo "Starting web server on localhost:8080 to generate PDFs"
./run_server.sh &
server_pid=$!

echo "Server PID is $server_pid"
wait 20

echo "Building:"
for file in decks/*html
do
    pdf_file=${file/html/pdf}
    if [ ! -s "$pdf_file" ]
    then
        echo "* $file";
        decktape remark "http://localhost:8080/$file" $pdf_file
    else
        echo "! $pdf_file - skipping, PDF already exists"
    fi
done

echo
echo "Done generating PDFs, shutting down server" 
kill "$server_pid"
