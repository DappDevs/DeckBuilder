# JSON

![JSON Logo](../media/json-logo.png)

JavaScript Object Notation

???
ref: https://www.json.org/

---
# Why JSON?

JSON is a convenient means of serializing data in a way that allows for sufficient expressiveness to capture arbitrary data while also being concise and simple enough to make it easy to use.

As a native format in Javascript, JSON is ideal for moving data in and out of Javascript applications.

???
---
# What is JSON

A subset of YAML native to Javascript, used for describing Javascript objects internally as well as serializing them externally for storage and transmission.

ECMA-404 The JSON Data Interchange Standard:
http://www.ecma-international.org/publications/files/ECMA-ST/ECMA-404.pdf

---
# Why?

AJAX.

"Asynchronous JavaScript And XML*"

* Update a web page without reloading the page
* Request data from a server - after the page has loaded
* Receive data from a server - after the page has loaded
* Send data to a server - in the background

(* could be XML, but it's plain text intransmission, so we can use other formats... like JSON)

???
AJAX is a set of Web development techniques using many web technologies on the client side to create asynchronous Web applications.

By decoupling the data interchange layer from the presentation layer, Ajax allows web pages, and by extension web applications, to change content dynamically without the need to reload the entire page.

The term Ajax was publicly used on 18 February 2005 by Jesse James Garrett in an article titled Ajax: A New Approach to Web Applications, based on techniques used on Google pages.

ref: https://en.wikipedia.org/wiki/Ajax_(programming)
ref: https://www.w3schools.com/xml/ajax_intro.asp

---
# JSON Format

JSON is built on two structures:

* A collection of name/value pairs. In various languages, this is realized as an object, record, struct, dictionary, hash table, keyed list, or associative array.
* An ordered list of values. In most languages, this is realized as an array, vector, list, or sequence.

These are universal data structures. Virtually all modern programming languages support them in one form or another. It makes sense that a data format that is interchangeable with programming languages also be based on these structures.

???
ref: https://www.json.org/

---
# JSON Structures

![JSON object](../media/json-object.png)
![JSON array](../media/json-array.png)
![JSON value](../media/json-value.png)
![JSON string](../media/json-string.png)
![JSON number](../media/json-number.png)

???
ref: https://www.json.org/

---
# JSON vs XML

JSON:
```javascript
{"employees":[
  { "firstName":"John", "lastName":"Doe" },
  { "firstName":"Anna", "lastName":"Smith" },
  { "firstName":"Peter", "lastName":"Jones" }
]}
```

XML:
```xml
<employees>
  <employee>
    <firstName>John</firstName> <lastName updated="2018-12-01">Doe</lastName>
  </employee>
  <employee>
    <firstName>Anna</firstName> <lastName>Smith</lastName>
  </employee>
  <employee>
    <firstName>Peter</firstName> <lastName>Jones</lastName>
  </employee>
</employees>
```

???
XML has nodes and attributes, while JSON has objects, arrays, and strings, represented by key/value pairings.

ref: https://www.w3schools.com/js/js_json_xml.asp
ref: https://codepunk.io/xml-vs-json-why-json-sucks/

---
# Comparison & Contrast

Similarities:

* Both JSON and XML are "self describing" (human readable)
* Both JSON and XML are hierarchical (values within values)
* Both JSON and XML can be parsed and used by lots of programming languages
* Both JSON and XML can be fetched with an XMLHttpRequest

Differences

* JSON doesn't use end tag
* JSON is shorter
* JSON is quicker to read and write
* JSON can use arrays
* XML supports attributes on elements, allowing for more compact expression of some complex data

* Parsing
 * XML has to be parsed with an XML parser. 
 * JSON can be parsed by a standard JavaScript function.

???
ref: https://www.w3schools.com/js/js_json_xml.asp

---
# In Summary

JSON is already parsed if you're using Javascript, and requires no external libraries.
JSON is more concise, while XML can be more expressive (primarily for complex data.)

---
# Tools for working with JSON


---
