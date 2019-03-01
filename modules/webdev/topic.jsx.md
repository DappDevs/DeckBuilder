# JSX

https://jsx.github.io/

---
# What is JSX?

JSX is a syntax extension to JavaScript

JSX produces React “elements”. 

---
# Why JSX?

React embraces the fact that rendering logic is inherently coupled with other UI logic: how events are handled, how the state changes over time, and how the data is prepared for display.

Instead of artificially separating technologies by putting markup and logic in separate files, React separates concerns with loosely coupled units called “components” that contain both. We will come back to components in a further section, but if you’re not yet comfortable putting markup in JS, this talk might convince you otherwise.

---
# Embedding expressions

Wrap expressions, such as variable names, in {curly braces} to have them interpolated.

```javascript
const name = 'RJ Herrick';

const user = {
  firstName: 'RJ',
  lastName: 'Herrick'
};

function formatName(user) {
  return user.firstName + ' ' + user.lastName;
}

const element = <h1>Hello, {name} / { user.firstName + ' ' + user.lastName } / {formatName(user)}</h1>;

ReactDOM.render(
  element,
  document.getElementById('root')
);
```

ref: https://reactjs.org/docs/introducing-jsx.html
---
# JSX is an Expression Too

After compilation, JSX expressions become regular JavaScript function calls and evaluate to JavaScript objects.

This means that you can use JSX inside of if statements and for loops, assign it to variables, accept it as arguments, and return it from functions:

```javascript
function getGreeting(user) {
  if (user) {
    return <h1>Hello, {formatName(user)}!</h1>;
  }
  return <h1>Hello, Stranger.</h1>;
}
```
---
#Specifying Attributes with JSX

You may use quotes to specify string literals as attributes:

```javascript
const element = <div tabIndex="0"></div>;
```

You may also use curly braces to embed a JavaScript expression in an attribute:

```javascript
const element = <img src={user.avatarUrl}></img>;
```

Don’t put quotes around curly braces when embedding a JavaScript expression in an attribute. You should either use quotes (for string values) or curly braces (for expressions), but not both in the same attribute.
---
# JSX Represents Objects

Babel compiles JSX down to React.createElement() calls.

These two examples are identical:

const element = (
  <h1 className="greeting">
    Hello, world!
  </h1>
);

const element = React.createElement(
  'h1',
  {className: 'greeting'},
  'Hello, world!'
);

???
ref: https://reactjs.org/docs/introducing-jsx.html
---
# JSX elements

```javascript
const element = React.createElement(
  'h1',
  {className: 'greeting'},
  'Hello, world!'
);
```
React.createElement() performs a few checks to help you write bug-free code but essentially it creates an object like this:

```javascript
// Note: this structure is simplified
const element = {
  type: 'h1',
  props: {
    className: 'greeting',
    children: 'Hello, world!'
  }
};
```

These objects are called “React elements”. You can think of them as descriptions of what you want to see on the screen. React reads these objects and uses them to construct the DOM and keep it up to date.
???
ref: https://reactjs.org/docs/introducing-jsx.html

---
# Caveats

* Avoiding restricted words in javascript
 * className - `class` is a reserved word in Javascript, so JSX components use `className` to pass class attribute values.

---
