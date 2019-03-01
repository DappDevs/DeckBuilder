# React native

Creating mobile apps with React

https://github.com/facebook/react-native
https://facebook.github.io/react-native/

???
ref: https://facebook.github.io/react-native/
ref: https://github.com/facebook/react-native
ref: https://github.com/jondot/awesome-react-native

---
# Why React Native?

React Native lets you build mobile apps using only JavaScript. It uses the same design as React, letting you compose a rich mobile UI from declarative components.

```javascript
import React, { Component } from 'react';
import { Text, View } from 'react-native';

class WhyReactNativeIsSoGreat extends Component {
  render() {
    return (
      <View>
        <Text>
          If you like React on the web, you'll like React Native.
        </Text>
        <Text>
          You just use native components like 'View' and 'Text',
          instead of web components like 'div' and 'span'.
        </Text>
      </View>
    );
  }
}
```

---
# A React Native app is a real mobile app

With React Native, you don't build a "mobile web app", an "HTML5 app", or a "hybrid app". You build a real mobile app that's indistinguishable from an app built using Objective-C or Java. React Native uses the same fundamental UI building blocks as regular iOS and Android apps. You just put those building blocks together using JavaScript and React.

```javascript
import React, { Component } from 'react';
import { Image, ScrollView, Text } from 'react-native';

class AwkwardScrollingImageWithText extends Component {
  render() {
    return (
      <ScrollView>
        <Image
          source={{uri: 'https://i.chzbgr.com/full/7345954048/h7E2C65F9/'}}
          style={{width: 320, height:180}}
        />
        <Text>
          On iOS, a React Native ScrollView uses a native UIScrollView.
          On Android, it uses a native ScrollView.

          On iOS, a React Native Image uses a native UIImageView.
          On Android, it uses a native ImageView.

          React Native wraps the fundamental native components, giving you
          the performance of a native app, plus the clean design of React.
        </Text>
      </ScrollView>
    );
  }
}
```
---
# Installing the CLI

`$ npm install -g react-native-cli`

---
# (1/3) Jumping in with Expo

Expo is the easiest way to start building a new React Native application. It allows you to start a project without installing or configuring any tools to build native code - no Xcode or Android Studio installation required

```shell
$ npm install -g expo-cli
$ expo init AwesomeProject
$ cd AwesomeProject
$ npm start
```
???
ref: https://facebook.github.io/react-native/docs/getting-started.html

---
# (2/3) Running your React Native application

Install the Expo client app on your iOS or Android phone and connect to the same wireless network as your computer. On Android, use the Expo app to scan the QR code from your terminal to open your project. On iOS, follow on-screen instructions to get a link.

https://docs.expo.io/

---
# (3/3) Modifying your app

Now that you have successfully run the app, let's modify it. Open App.js in your text editor of choice and edit some lines. The application should reload automatically once you save your changes.

---

