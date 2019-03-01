# React.js

![React icon](../media/icon-react.png)

???
ref: https://reactjs.org/

---
# What is React?

React is a declarative, efficient, and flexible JavaScript library for building user interfaces. It lets you compose complex UIs from small and isolated pieces of code called “components”.

???
ref: https://reactjs.org/tutorial/tutorial.html

---
# Components

A component takes in parameters, called props (short for “properties”), and returns a hierarchy of views to display via the render method.

Each React element is a JavaScript object that you can store in a variable or pass around in your program.

You can compose and render custom React components, referring to them by name and causing their cascading render methods to be invoked.

---
# render method

The render method returns a description of what you want to see on the screen. React takes the description and displays the result. In particular, render returns a React element, which is a lightweight description of what to render.

---
# JSX

JSX is an XML syntax for declaring component composition.

The <div /> syntax is transformed at build time to React.createElement('div').

JSX comes with the full power of JavaScript. You can put any JavaScript expressions within braces inside JSX.
---
# Tutorial

https://reactjs.org/tutorial/tutorial.html

---
# API Reference

https://reactjs.org/docs/react-api.html
???
ref: https://reactjs.org/docs/react-api.html
---
# Dev tools

The React Devtools extension for Chrome and Firefox lets you inspect a React component tree with your browser’s developer tools.
The React DevTools let you check the props and the state of your React components.

After installing React DevTools, you can right-click on any element on the page, click “Inspect” to open the developer tools, and the React tab will appear as the last tab to the right.

???
However, note there are a few extra steps to get it working with CodePen:

* Log in or register and confirm your email (required to prevent spam).
* Click the “Fork” button.
* Click “Change View” and then choose “Debug mode”.
* In the new tab that opens, the devtools should now have a React tab.

---
# Importing CSS

Import css files directly like so:

```javascript
import './App.css';
```
and they will be rendered in the document.
---
# Root elements

Example root element:
```javascript
<div id="root"></div>
```

We call this a “root” DOM node because everything inside it will be managed by React DOM.

Applications built with just React usually have a single root DOM node. If you are integrating React into an existing app, you may have as many isolated root DOM nodes as you like.
???
ref: https://reactjs.org/docs/rendering-elements.html
---
# Rendering elements

To render a React element into a root DOM node, pass both to ReactDOM.render():

```javascript
const element = <h1>Hello, world</h1>;
ReactDOM.render(element, document.getElementById('root'));
```

???
ref: https://reactjs.org/redirect-to-codepen/rendering-elements/render-an-element
ref: https://reactjs.org/docs/rendering-elements.html
---
# Components

Conceptually, components are like JavaScript functions. They accept arbitrary inputs (called “props”) and return React elements describing what should appear on the screen.

The simplest way to define a component is to write a JavaScript function:

```javascript
function Welcome(props) {
  return <h1>Hello, {props.name}</h1>;
}
```

This function is a valid React component because it accepts a single “props” (which stands for properties) object argument with data and returns a React element. We call such components “function components” because they are literally JavaScript functions.

You can also use an ES6 class to define a component:

```javascript
class Welcome extends React.Component {
  render() {
    return <h1>Hello, {this.props.name}</h1>;
  }
}
```

The above two components are equivalent from React’s point of view.


???
ref: https://reactjs.org/docs/components-and-props.html
ref: https://reactjs.org/docs/react-component.html
---
# Custom objects

React elements can represent DOM tags and user-defined component types.
```javascript
const element-dom = <div />;
const element-custom = <Welcome name="Sara" />;
```

When React sees an element representing a user-defined component, it passes JSX attributes to this component as a single object. We call this object “props”.

For example, this code renders “Hello, Sara” on the page:
```javascript
function Welcome(props) {
  return <h1>Hello, {props.name}</h1>;
}

const element = <Welcome name="Sara" />;
ReactDOM.render( element, document.getElementById('root'));
```
---
# Note on custom component Naming

!!! Always start component names with a capital letter.

React treats components starting with lowercase letters as DOM tags. For example, <div /> represents an HTML div tag, but <Welcome /> represents a component and requires Welcome to be in scope.

???
ref: https://reactjs.org/docs/components-and-props.html
ref: https://reactjs.org/redirect-to-codepen/components-and-props/rendering-a-component

---
# Subclassing

All React component classes that have a constructor should start it with a super(props) call.

---
# Composing Components

Components can refer to other components in their output. This lets us use the same component abstraction for any level of detail. A button, a form, a dialog, a screen: in React apps, all those are commonly expressed as components.

For example, we can create an App component that renders Welcome many times:

```javascript
function Welcome(props) {
  return <h1>Hello, {props.name}</h1>;
}

function App() {
  return (
    <div>
      <Welcome name="Sara" />
      <Welcome name="Cahal" />
      <Welcome name="Edite" />
    </div>
  );
}

ReactDOM.render(
  <App />,
  document.getElementById('root')
);
```
???
ref: https://reactjs.org/redirect-to-codepen/components-and-props/composing-components
---
# Converting a Function to a Class

You can convert a function component to a class in five steps:

1. Create an ES6 class, with the same name, that extends React.Component.
1. Add a single empty method to it called render().
1. Move the body of the function into the render() method.
1. Replace props with this.props in the render() body.
1. Delete the remaining empty function declaration.

```javascript
class Clock extends React.Component {
  render() {
    return (
      <div>
        <h1>Hello, world!</h1>
        <h2>It is {this.props.date.toLocaleTimeString()}.</h2>
      </div>
    );
  }
}
```

???
ref: https://reactjs.org/docs/state-and-lifecycle.html 

---
# Component Props

* Props are read only
* All React components must act like pure functions with respect to their props.
* No state can be altered on props, they must be treated as read only.

---
# State 

React components with state render UI based on that state. When the state of components changes, so does the component UI.

State is similar to props, but it is private and fully controlled by the component.

It can be used to track data over time.

Local state is only available to components defined as classes.

setState() is the only valid way to update state, and it merges the key/value into the existing state keystore

```javascript
this.setState()
```

???
ref: https://reactjs.org/docs/state-and-lifecycle.html
ref: https://css-tricks.com/understanding-react-setstate/
ref: 
---
# Props vs State

* Does it describe the input to the function?
 * Use props
* Does it track change over time?
 * Use state

---
# Managing Shared State

To collect data from multiple children, or to have two child components communicate with each other, you need to declare the shared state in their parent component instead. The parent component can pass the state back down to the children by using props; this keeps the child components in sync with each other and with the parent component.

---
# Lifecycle hooks

* creation
* initial DOM load
* DOM unload
* custom event

---
# Constructor

Called when the element is first loaded 

```javascript
class Book extends React.Component {
  constructor(props) {
    // NOTE: Class components should always call the base constructor with props.
    super(props);
    this.state = {date: new Date()};
  }
}
```
---
# Mounting

Initializing state when an element is first rendered to the DOM.
Un-mounting is freeing this state when the DOM elements rendered are removed.
Special methods on the component class are available to run some code when a component mounts and unmounts:

```javascript
  componentDidMount() {

  }

  componentWillUnmount() {

  }
```

---
# Reconciliation

Reconciliation is the process react uses to amend the DOM when state changes.

When the request to setState() is triggered, React creates a new tree containing the reactive elements in the component (along with the updated state).

???
ref: https://reactjs.org/docs/reconciliation.html
ref: https://css-tricks.com/understanding-react-setstate/

---
# Example of managing state

Incrementing and decrementing a counter on button click:

```javascript
class App extends React.Component {

state = { count: 0 }

handleIncrement = () => {
  this.setState({ count: this.state.count + 1 })
}

handleDecrement = () => {
  this.setState({ count: this.state.count - 1 })
}
  render() {
    return (
      <div>
        <div>
          {this.state.count}
        </div>
        <button onClick={this.handleIncrement}>Increment by 1</button>
        <button onClick={this.handleDecrement}>Decrement by 1</button>
      </div>
    )
  }
}
```

???
ref: https://css-tricks.com/understanding-react-setstate/
---
# Targeting state within a function

You cannot always trust this.state to hold the correct state immediately after calling setState(), as it is always equal to the state rendered on the screen. State does not get updated until the component has been re-rendered. As such, setState() should be treated asynchronously — in other words, do not always expect that the state has changed after calling setState().

Use updater functions instead of manipulating state values directly when they depend on previous state.

---
# Passing setState a function

Multiple calls to setState

```javascript
handleIncrement = () => {
  this.setState((prevState) => ({ count: prevState.count + 1 }))
  this.setState((prevState) => ({ count: prevState.count + 1 }))
  this.setState((prevState) => ({ count: prevState.count + 1 }))
}
```
or better, break out the updater to it's own function:
```javascript
changeCount = () => {
  this.setState((prevState) => {
    return { count: prevState.count + 1}
  })
}

handleIncrement = () => {
  this.changeCount()
  this.changeCount()
  this.changeCount()
}
```

---
# Handling Events

Handling events with React elements is very similar to handling events on DOM elements. There are some syntactic differences:

* React events are named using camelCase, rather than lowercase.
* With JSX you pass a function as the event handler, rather than a string.

For example, the HTML:
```html
<button onclick="activateLasers()">
  Activate Lasers
</button>
```

is slightly different in React:
```javascript
<button onClick={activateLasers}>
  Activate Lasers
</button>
```
???
ref: https://reactjs.org/docs/handling-events.html

---
# Preventing default

Another difference is that you cannot return false to prevent default behavior in React. You must call preventDefault explicitly. For example, with plain HTML, to prevent the default link behavior of opening a new page, you can write:

```html
<a href="#" onclick="console.log('The link was clicked.'); return false">
  Click me
</a>
```

In React, this could instead be:
```javascript
function ActionLink() {
  function handleClick(e) {
    e.preventDefault();
    console.log('The link was clicked.');
  }

  return (
    <a href="#" onClick={handleClick}>
      Click me
    </a>
  );
}
```
???
Here, e is a synthetic event. React defines these synthetic events according to the W3C spec, so you don’t need to worry about cross-browser compatibility. See the SyntheticEvent reference guide to learn more.

When using React you should generally not need to call addEventListener to add listeners to a DOM element after it is created. Instead, just provide a listener when the element is initially rendered.

ref: https://reactjs.org/docs/handling-events.html

---
# eventHandlers as class methods

When you define a component using an ES6 class, a common pattern is for an event handler to be a method on the class. For example, this Toggle component renders a button that lets the user toggle between “ON” and “OFF” states:

```javascript
class Toggle extends React.Component {
  constructor(props) {
    super(props);
    this.state = {isToggleOn: true};

    // This binding is necessary to make `this` work in the callback
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState(state => ({
      isToggleOn: !state.isToggleOn
    }));
  }

  render() {
    return (
      <button onClick={this.handleClick}>
        {this.state.isToggleOn ? 'ON' : 'OFF'}
      </button>
    );
  }
}

ReactDOM.render(
  <Toggle />,
  document.getElementById('root')
);
```
ref: http://codepen.io/gaearon/pen/xEmzGg?editors=0010
---
# define "this"

You have to be careful about the meaning of this in JSX callbacks. In JavaScript, class methods are not bound by default. If you forget to bind this.handleClick and pass it to onClick, this will be undefined when the function is actually called.

This is not React-specific behavior; it is a part of how functions work in JavaScript. Generally, if you refer to a method without () after it, such as onClick={this.handleClick}, you should bind that method.

???
ref: https://reactjs.org/docs/handling-events.html
---
# Public class fields syntax

If calling bind annoys you, there are two ways you can get around this. If you are using the experimental public class fields syntax, you can use class fields to correctly bind callbacks:

```javascript
class LoggingButton extends React.Component {
  // This syntax ensures `this` is bound within handleClick.
  // Warning: this is *experimental* syntax.
  handleClick = () => {
    console.log('this is:', this);
  }

  render() {
    return (
      <button onClick={this.handleClick}>
        Click me
      </button>
    );
  }
}
```
This syntax is enabled by default in Create React App.

---
# Arrow function callbacks

If you aren’t using class fields syntax, you can use an arrow function in the callback:

class LoggingButton extends React.Component {
  handleClick() {
    console.log('this is:', this);
  }

  render() {
    // This syntax ensures `this` is bound within handleClick
    return (
      <button onClick={(e) => this.handleClick(e)}>
        Click me
      </button>
    );
  }
}

The problem with this syntax is that a different callback is created each time the LoggingButton renders. In most cases, this is fine. However, if this callback is passed as a prop to lower components, those components might do an extra re-rendering. We generally recommend *binding in the constructor* or using the class fields syntax, to avoid this sort of performance problem.

???
ref: https://reactjs.org/docs/handling-events.html
---
# Passing Arguments to Event Handlers

Inside a loop it is common to want to pass an extra parameter to an event handler. For example, if id is the row ID, either of the following would work:
```html
<button onClick={(e) => this.deleteRow(id, e)}>Delete Row</button>
<button onClick={this.deleteRow.bind(this, id)}>Delete Row</button>
```

The above two lines are equivalent, and use arrow functions and Function.prototype.bind respectively.

In both cases, the e argument representing the React event will be passed as a second argument after the ID. With an arrow function, we have to pass it explicitly, but with bind any further arguments are automatically forwarded.
---
# Conditional Rendering

In React, you can create distinct components that encapsulate behavior you need. Then, you can render only some of them, depending on the state of your application.

???
ref: https://reactjs.org/docs/conditional-rendering.html
---
# A Conditional Greeting

Conditional rendering in React works the same way conditions work in JavaScript. Use JavaScript operators like if or the conditional operator to create elements representing the current state, and let React update the UI to match them.

Consider these two components:
```javascript
function UserGreeting(props) {
  return <h1>Welcome back!</h1>;
}

function GuestGreeting(props) {
  return <h1>Please sign up.</h1>;
}
```
???
ref: https://reactjs.org/docs/conditional-rendering.html

---
# A Conditional Greeting (2/2)
We’ll create a Greeting component that displays either of these components depending on whether a user is logged in:
```javascript
function Greeting(props) {
  const isLoggedIn = props.isLoggedIn;
  if (isLoggedIn) {
    return <UserGreeting />;
  }
  return <GuestGreeting />;
}

ReactDOM.render(
  // Try changing to isLoggedIn={true}:
  <Greeting isLoggedIn={false} />,
  document.getElementById('root')
);
```
This example renders a different greeting depending on the value of isLoggedIn prop.

???
ref: https://reactjs.org/docs/conditional-rendering.html
ref: https://codepen.io/gaearon/pen/ZpVxNq?editors=0011

---
# Element Variables

You can use variables to store elements. This can help you conditionally render a part of the component while the rest of the output doesn’t change.

Consider these two new components representing Logout and Login buttons:

```javascript
function LoginButton(props) {
  return (
    <button onClick={props.onClick}>
      Login
    </button>
  );
}

function LogoutButton(props) {
  return (
    <button onClick={props.onClick}>
      Logout
    </button>
  );
}
```

---

In the example below, we will create a stateful component called LoginControl.

It will render either <LoginButton /> or <LogoutButton /> depending on its current state. It will also render a <Greeting /> from the previous example:

```javascript
class LoginControl extends React.Component {
  constructor(props) {
    super(props);
    this.handleLoginClick = this.handleLoginClick.bind(this);
    this.handleLogoutClick = this.handleLogoutClick.bind(this);
    this.state = {isLoggedIn: false};
  }

  handleLoginClick() {
    this.setState({isLoggedIn: true});
  }

  handleLogoutClick() {
    this.setState({isLoggedIn: false});
  }

  render() {
    const isLoggedIn = this.state.isLoggedIn;
    let button;

    if (isLoggedIn) {
      button = <LogoutButton onClick={this.handleLogoutClick} />;
    } else {
      button = <LoginButton onClick={this.handleLoginClick} />;
    }

    return (
      <div>
        <Greeting isLoggedIn={isLoggedIn} />
        {button}
      </div>
    );
  }
}

ReactDOM.render(
  <LoginControl />,
  document.getElementById('root')
);
```
???
ref: https://reactjs.org/docs/conditional-rendering.html
ref: https://codepen.io/gaearon/pen/QKzAgB?editors=0010

---
# Inline If with Logical && Operator

While declaring a variable and using an if statement is a fine way to conditionally render a component, sometimes you might want to use a shorter syntax. There are a few ways to inline conditions in JSX, explained below.  
You may embed any expressions in JSX by wrapping them in curly braces. This includes the JavaScript logical && operator. It can be handy for conditionally including an element:

```javascript
function Mailbox(props) {
  const unreadMessages = props.unreadMessages;
  return (
    <div>
      <h1>Hello!</h1>
      {unreadMessages.length > 0 &&
        <h2>
          You have {unreadMessages.length} unread messages.
        </h2>
      }
    </div>
  );
}

const messages = ['React', 'Re: React', 'Re:Re: React'];
ReactDOM.render(
  <Mailbox unreadMessages={messages} />,
  document.getElementById('root')
);
```
It works because in JavaScript, true && expression always evaluates to expression, and false && expression always evaluates to false.
Therefore, if the condition is true, the element right after && will appear in the output. If it is false, React will ignore and skip it.

???
ref: https://codepen.io/gaearon/pen/ozJddz?editors=0010
ref: https://reactjs.org/docs/conditional-rendering.html
---
# Inline If-Else with Conditional Operator

Another method for conditionally rendering elements inline is to use the JavaScript conditional operator condition ? true : false.
In the example below, we use it to conditionally render a small block of text.
```javascript
render() {
  const isLoggedIn = this.state.isLoggedIn;
  return (
    <div>
      The user is <b>{isLoggedIn ? 'currently' : 'not'}</b> logged in.
    </div>
  );
}
```

It can also be used for larger expressions although it is less obvious what’s going on:

```javascript
render() {
  const isLoggedIn = this.state.isLoggedIn;
  return (
    <div>
      {isLoggedIn ? (
        <LogoutButton onClick={this.handleLogoutClick} />
      ) : (
        <LoginButton onClick={this.handleLoginClick} />
      )}
    </div>
  );
}
```
---
# Preventing Component from Rendering

In rare cases you might want a component to hide itself even though it was rendered by another component. To do this return null instead of its render output.

In the example below, the <WarningBanner /> is rendered depending on the value of the prop called warn. If the value of the prop is false, then the component does not render:

```javascript
function WarningBanner(props) {
  if (!props.warn) {
    return null;
  }

  return (
    <div className="warning">
      Warning!
    </div>
  );
}

class Page extends React.Component {
  constructor(props) {
    super(props);
    this.state = {showWarning: true};
    this.handleToggleClick = this.handleToggleClick.bind(this);
  }

  handleToggleClick() {
    this.setState(state => ({
      showWarning: !state.showWarning
    }));
  }

  render() {
    return (
      <div>
        <WarningBanner warn={this.state.showWarning} />
        <button onClick={this.handleToggleClick}>
          {this.state.showWarning ? 'Hide' : 'Show'}
        </button>
      </div>
    );
  }
}

ReactDOM.render(
  <Page />,
  document.getElementById('root')
);
```
Returning null from a component’s render method does not affect the firing of the component’s lifecycle methods. For instance componentDidUpdate will still be called.

???
ref: https://reactjs.org/docs/conditional-rendering.html
ref: https://codepen.io/gaearon/pen/Xjoqwm?editors=0010

---
# Lists and Keys

First, let’s review how you transform lists in JavaScript.

Given the code below, we use the map() function to take an array of numbers and double their values. We assign the new array returned by map() to the variable doubled and log it:
```javascript
const numbers = [1, 2, 3, 4, 5];
const doubled = numbers.map((number) => number * 2);
console.log(doubled);
```

This code logs `[2, 4, 6, 8, 10]` to the console.
In React, transforming arrays into lists of elements is nearly identical.
???
ref: https://reactjs.org/docs/lists-and-keys.html

---
# Rendering Multiple Components

You can build collections of elements and include them in JSX using curly braces {}.

Below, we loop through the numbers array using the JavaScript map() function. We return a <li> element for each item. Finally, we assign the resulting array of elements to listItems:
```javascript
const numbers = [1, 2, 3, 4, 5];
const listItems = numbers.map((number) =>
  <li>{number}</li>
);
```

We include the entire listItems array inside a <ul> element, and render it to the DOM:

```javascript
ReactDOM.render(
  <ul>{listItems}</ul>,
  document.getElementById('root')
);
```
This code displays a bullet list of numbers between 1 and 5.

???
ref: https://reactjs.org/docs/lists-and-keys.html
ref: https://codepen.io/gaearon/pen/GjPyQr?editors=0011
---
# Basic List Component

Usually you would render lists inside a component.
We can refactor the previous example into a component that accepts an array of numbers and outputs an unordered list of elements.
```javascript
function NumberList(props) {
  const numbers = props.numbers;
  const listItems = numbers.map((number) =>
    <li>{number}</li>
  );
  return (
    <ul>{listItems}</ul>
  );
}

const numbers = [1, 2, 3, 4, 5];
ReactDOM.render(
  <NumberList numbers={numbers} />,
  document.getElementById('root')
);
```
---
# Basic List Component (2/2)

When you run this code, you’ll be given a warning that a key should be provided for list items. A “key” is a special string attribute you need to include when creating lists of elements. We’ll discuss why it’s important in the next section.

Let’s assign a key to our list items inside numbers.map() and fix the missing key issue.
```javascript
function NumberList(props) {
  const numbers = props.numbers;
  const listItems = numbers.map((number) =>
    <li key={number.toString()}>
      {number}
    </li>
  );
  return (
    <ul>{listItems}</ul>
  );
}

const numbers = [1, 2, 3, 4, 5];
ReactDOM.render(
  <NumberList numbers={numbers} />,
  document.getElementById('root')
);
```
???
ref: https://codepen.io/gaearon/pen/jrXYRR?editors=0011
ref: https://reactjs.org/docs/lists-and-keys.html
---
# Keys

Keys help React identify which items have changed, are added, or are removed. Keys should be given to the elements inside the array to give the elements a stable identity:
```javascript
const numbers = [1, 2, 3, 4, 5];
const listItems = numbers.map((number) =>
  <li key={number.toString()}>
    {number}
  </li>
);
```

The best way to pick a key is to use a string that uniquely identifies a list item among its siblings. Most often you would use IDs from your data as keys:

```javascript
const todoItems = todos.map((todo) =>
  <li key={todo.id}>
    {todo.text}
  </li>
);
```
???
ref: https://reactjs.org/docs/lists-and-keys.html

---
# Using ids as keys (or not!)

When you don’t have stable IDs for rendered items, you may use the item index as a key as a last resort:
```javascript
const todoItems = todos.map((todo, index) =>
  // Only do this if items have no stable IDs
  <li key={index}>
    {todo.text}
  </li>
);
```

We don’t recommend using indexes for keys if the order of items may change. This can negatively impact performance and may cause issues with component state. Check out Robin Pokorny’s article for an in-depth explanation on the negative impacts of using an index as a key. If you choose not to assign an explicit key to list items then React will default to using indexes as keys.
https://medium.com/@robinpokorny/index-as-a-key-is-an-anti-pattern-e0349aece318

???
ref: https://medium.com/@robinpokorny/index-as-a-key-is-an-anti-pattern-e0349aece318
ref: https://reactjs.org/docs/reconciliation.html#recursing-on-children

---
# Extracting Components with Keys

Keys only make sense in the context of the surrounding array.

For example, if you extract a ListItem component, you should keep the key on the <ListItem /> elements in the array rather than on the <li> element in the ListItem itself.

A good rule of thumb is that elements inside the map() call need keys.

Keys Must Only Be Unique Among Siblings

Keys serve as a hint to React but they don’t get passed to your components. If you need the same value in your component, pass it explicitly as a prop with a different name:

---
# Example: Incorrect Key Usage
```javascript

function ListItem(props) {
  const value = props.value;
  return (
    // Wrong! There is no need to specify the key here:
    <li key={value.toString()}>
      {value}
    </li>
  );
}

function NumberList(props) {
  const numbers = props.numbers;
  const listItems = numbers.map((number) =>
    // Wrong! The key should have been specified here:
    <ListItem value={number} />
  );
  return (
    <ul>
      {listItems}
    </ul>
  );
}

const numbers = [1, 2, 3, 4, 5];
ReactDOM.render(
  <NumberList numbers={numbers} />,
  document.getElementById('root')
);
```
---
# Example: Correct Key Usage
```javascript
function ListItem(props) {
  // Correct! There is no need to specify the key here:
  return <li>{props.value}</li>;
}

function NumberList(props) {
  const numbers = props.numbers;
  const listItems = numbers.map((number) =>
    // Correct! Key should be specified inside the array.
    <ListItem key={number.toString()}
              value={number} />
  );
  return (
    <ul>
      {listItems}
    </ul>
  );
}

const numbers = [1, 2, 3, 4, 5];
ReactDOM.render(
  <NumberList numbers={numbers} />,
  document.getElementById('root')
);
```

???
ref: https://codepen.io/gaearon/pen/ZXeOGM?editors=0010
ref: https://reactjs.org/docs/lists-and-keys.html
---
# Keys are only locally unique

```javascript
function Blog(props) {
  const sidebar = (
    <ul>
      {props.posts.map((post) =>
        <li key={post.id}>
          {post.title}
        </li>
      )}
    </ul>
  );
  const content = props.posts.map((post) =>
    <div key={post.id}>
      <h3>{post.title}</h3>
      <p>{post.content}</p>
    </div>
  );
  return (
    <div>
      {sidebar}
      <hr />
      {content}
    </div>
  );
}

const posts = [
  {id: 1, title: 'Hello World', content: 'Welcome to learning React!'},
  {id: 2, title: 'Installation', content: 'You can install React from npm.'}
];
ReactDOM.render(
  <Blog posts={posts} />,
  document.getElementById('root')
);
```
---
# Pass in the key explicitly if needed

```javascript
const content = posts.map((post) =>
  <Post
    key={post.id}
    id={post.id}
    title={post.title} />
);
```
With the example above, the Post component can read props.id, but not props.key.

---
# Embedding map() in JSX

In the examples above we declared a separate listItems variable and included it in JSX:
```javascript
function NumberList(props) {
  const numbers = props.numbers;
  const listItems = numbers.map((number) =>
    <ListItem key={number.toString()}
              value={number} />
  );
  return (
    <ul>
      {listItems}
    </ul>
  );
}
```
JSX allows embedding any expression in curly braces so we could inline the map() result:

```javascript
function NumberList(props) {
  const numbers = props.numbers;
  return (
    <ul>
      {numbers.map((number) =>
        <ListItem key={number.toString()}
                  value={number} />
      )}
    </ul>
  );
}
```
Sometimes this results in clearer code, but this style can also be abused. Like in JavaScript, it is up to you to decide whether it is worth extracting a variable for readability. Keep in mind that if the map() body is too nested, it might be a good time to extract a component.

???
ref: https://codepen.io/gaearon/pen/BLvYrB?editors=0010
ref: https://reactjs.org/docs/lists-and-keys.html
---
# Forms

HTML form elements work a little bit differently from other DOM elements in React, because form elements naturally keep some internal state. For example, this form in plain HTML accepts a single name:
```javascript
<form>
  <label>
    Name:
    <input type="text" name="name" />
  </label>
  <input type="submit" value="Submit" />
</form>
```
This form has the default HTML form behavior of browsing to a new page when the user submits the form. If you want this behavior in React, it just works. But in most cases, it’s convenient to have a JavaScript function that handles the submission of the form and has access to the data that the user entered into the form. The standard way to achieve this is with a technique called “controlled components”.
???
ref: https://reactjs.org/docs/forms.html
---
# Controlled Components

In HTML, form elements such as <input>, <textarea>, and <select> typically maintain their own state and update it based on user input. In React, mutable state is typically kept in the state property of components, and only updated with setState().

We can combine the two by making the React state be the “single source of truth”. Then the React component that renders a form also controls what happens in that form on subsequent user input. An input form element whose value is controlled by React in this way is called a “controlled component”.

For example, if we want to make the previous example log the name when it is submitted, we can write the form as a controlled component:
```javascript
class NameForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: ''};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('A name was submitted: ' + this.state.value);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Name:
          <input type="text" value={this.state.value} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}
```
???
ref: https://codepen.io/gaearon/pen/VmmPgp?editors=0010
---
# Keeping state in sync

Since the value attribute is set on our form element, the displayed value will always be this.state.value, making the React state the source of truth. Since handleChange runs on every keystroke to update the React state, the displayed value will update as the user types.

With a controlled component, every state mutation will have an associated handler function. This makes it straightforward to modify or validate user input. For example, if we wanted to enforce that names are written with all uppercase letters, we could write handleChange as:
```javascript
handleChange(event) {
  this.setState({value: event.target.value.toUpperCase()});
}
```
???
ref: https://reactjs.org/docs/forms.html
---
# The textarea Tag

In HTML, a <textarea> element defines its text by its children:

```javascript
<textarea>
  Hello there, this is some text in a text area
</textarea>
```

In React, a <textarea> uses a value attribute instead. This way, a form using a <textarea> can be written very similarly to a form that uses a single-line input:
```javascript
class EssayForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      value: 'Please write an essay about your favorite DOM element.'
    };

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('An essay was submitted: ' + this.state.value);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Essay:
          <textarea value={this.state.value} onChange={this.handleChange} />
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}
```

Notice that this.state.value is initialized in the constructor, so that the text area starts off with some text in it.
---
# The select Tag

In HTML, <select> creates a drop-down list. For example, this HTML creates a drop-down list of flavors:
```html
<select>
  <option value="grapefruit">Grapefruit</option>
  <option value="lime">Lime</option>
  <option selected value="coconut">Coconut</option>
  <option value="mango">Mango</option>
</select>
```

Note that the Coconut option is initially selected, because of the selected attribute. React, instead of using this selected attribute, uses a value attribute on the root select tag. This is more convenient in a controlled component because you only need to update it in one place. For example:

```javascript
class FlavorForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: 'coconut'};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('Your favorite flavor is: ' + this.state.value);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Pick your favorite flavor:
          <select value={this.state.value} onChange={this.handleChange}>
            <option value="grapefruit">Grapefruit</option>
            <option value="lime">Lime</option>
            <option value="coconut">Coconut</option>
            <option value="mango">Mango</option>
          </select>
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}
```

Overall, this makes it so that <input type="text">, <textarea>, and <select> all work very similarly - they all accept a value attribute that you can use to implement a controlled component.

You can pass an array into the value attribute, allowing you to select multiple options in a select tag:
```javascript
    <select multiple={true} value={['B', 'C']}>
```

---
# The file input Tag

In HTML, an <input type="file"> lets the user choose one or more files from their device storage to be uploaded to a server or manipulated by JavaScript via the File API.

```javascript
<input type="file" />
```

Because its value is read-only, it is an uncontrolled component in React. It is discussed together with other uncontrolled components later in the documentation. 
---
# Handling Multiple Inputs

When you need to handle multiple controlled input elements, you can add a name attribute to each element and let the handler function choose what to do based on the value of event.target.name.

For example:
```javascript
class Reservation extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      isGoing: true,
      numberOfGuests: 2
    };

    this.handleInputChange = this.handleInputChange.bind(this);
  }

  handleInputChange(event) {
    const target = event.target;
    const value = target.type === 'checkbox' ? target.checked : target.value;
    const name = target.name;

    this.setState({
      [name]: value
    });
  }

  render() {
    return (
      <form>
        <label>
          Is going:
          <input
            name="isGoing"
            type="checkbox"
            checked={this.state.isGoing}
            onChange={this.handleInputChange} />
        </label>
        <br />
        <label>
          Number of guests:
          <input
            name="numberOfGuests"
            type="number"
            value={this.state.numberOfGuests}
            onChange={this.handleInputChange} />
        </label>
      </form>
    );
  }
}
```

Note how we used the ES6 computed property name syntax to update the state key corresponding to the given input name:

```javascript
this.setState({
  [name]: value
});
```

It is equivalent to this ES5 code:

```javascript
var partialState = {};
partialState[name] = value;
this.setState(partialState);
```

Also, since setState() automatically merges a partial state into the current state, we only needed to call it with the changed parts.

---
# Controlled Input Null Value

Specifying the value prop on a controlled component prevents the user from changing the input unless you desire so. If you’ve specified a value but the input is still editable, you may have accidentally set value to undefined or null.

The following code demonstrates this. (The input is locked at first but becomes editable after a short delay.)

```javacript
ReactDOM.render(<input value="hi" />, mountNode);

setTimeout(function() {
  ReactDOM.render(<input value={null} />, mountNode);
}, 1000);
```
---
# Alternatives to Controlled Components

It can sometimes be tedious to use controlled components, because you need to write an event handler for every way your data can change and pipe all of the input state through a React component. This can become particularly annoying when you are converting a preexisting codebase to React, or integrating a React application with a non-React library. In these situations, you might want to check out uncontrolled components, an alternative technique for implementing input forms.

ref: https://reactjs.org/docs/uncontrolled-components.html
---
# Fully-Fledged Solutions

If you’re looking for a complete solution including validation, keeping track of the visited fields, and handling form submission, Formik is one of the popular choices. However, it is built on the same principles of controlled components and managing state — so don’t neglect to learn them.

ref: https://jaredpalmer.com/formik

---
# Lifting state up

When multiple components share common state, move it upward to their closest shared ancestor.

???
ref: https://reactjs.org/docs/lifting-state-up.html
---
# Composition vs Inheritance

React has a powerful composition model, and we recommend using composition instead of inheritance to reuse code between components.

???
ref: https://reactjs.org/docs/composition-vs-inheritance.html
---
# Containment

Some components don’t know their children ahead of time. This is especially common for components like Sidebar or Dialog that represent generic “boxes”.

We recommend that such components use the special children prop to pass children elements directly into their output:

function FancyBorder(props) {
  return (
    <div className={'FancyBorder FancyBorder-' + props.color}>
      {props.children}
    </div>
  );
}

This lets other components pass arbitrary children to them by nesting the JSX:

function WelcomeDialog() {
  return (
    <FancyBorder color="blue">
      <h1 className="Dialog-title">
        Welcome
      </h1>
      <p className="Dialog-message">
        Thank you for visiting our spacecraft!
      </p>
    </FancyBorder>
  );
}

Try it on CodePen

Anything inside the <FancyBorder> JSX tag gets passed into the FancyBorder component as a children prop. Since FancyBorder renders {props.children} inside a <div>, the passed elements appear in the final output.

While this is less common, sometimes you might need multiple “holes” in a component. In such cases you may come up with your own convention instead of using children:

function SplitPane(props) {
  return (
    <div className="SplitPane">
      <div className="SplitPane-left">
        {props.left}
      </div>
      <div className="SplitPane-right">
        {props.right}
      </div>
    </div>
  );
}

function App() {
  return (
    <SplitPane
      left={
        <Contacts />
      }
      right={
        <Chat />
      } />
  );
}

Try it on CodePen

React elements like <Contacts /> and <Chat /> are just objects, so you can pass them as props like any other data. This approach may remind you of “slots” in other libraries but there are no limitations on what you can pass as props in React.
---
# Specialization

Sometimes we think about components as being “special cases” of other components. For example, we might say that a WelcomeDialog is a special case of Dialog.

In React, this is also achieved by composition, where a more “specific” component renders a more “generic” one and configures it with props:

```javascript
function Dialog(props) {
  return (
    <FancyBorder color="blue">
      <h1 className="Dialog-title">
        {props.title}
      </h1>
      <p className="Dialog-message">
        {props.message}
      </p>
    </FancyBorder>
  );
}

function WelcomeDialog() {
  return (
    <Dialog
      title="Welcome"
      message="Thank you for visiting our spacecraft!" />
  );
}
```

Composition works equally well for components defined as classes:

```javascript
function Dialog(props) {
  return (
    <FancyBorder color="blue">
      <h1 className="Dialog-title">
        {props.title}
      </h1>
      <p className="Dialog-message">
        {props.message}
      </p>
      {props.children}
    </FancyBorder>
  );
}

class SignUpDialog extends React.Component {
  constructor(props) {
    super(props);
    this.handleChange = this.handleChange.bind(this);
    this.handleSignUp = this.handleSignUp.bind(this);
    this.state = {login: ''};
  }

  render() {
    return (
      <Dialog title="Mars Exploration Program"
              message="How should we refer to you?">
        <input value={this.state.login}
               onChange={this.handleChange} />
        <button onClick={this.handleSignUp}>
          Sign Me Up!
        </button>
      </Dialog>
    );
  }

  handleChange(e) {
    this.setState({login: e.target.value});
  }

  handleSignUp() {
    alert(`Welcome aboard, ${this.state.login}!`);
  }
}
```

???
ref: https://codepen.io/gaearon/pen/kkEaOZ?editors=0010
ref: https://codepen.io/gaearon/pen/gwZbYa?editors=0010
ref: https://reactjs.org/docs/composition-vs-inheritance.html#specialization

---
# API calls

### How can I make an AJAX call?
You can use any AJAX library you like with React. Some popular ones are Axios, jQuery AJAX, and the browser built-in window.fetch.

###Where in the component lifecycle should I make an AJAX call?
You should populate data with AJAX calls in the componentDidMount lifecycle method. This is so you can use setState to update your component when the data is retrieved.

###Example: Using AJAX results to set local state
The component below demonstrates how to make an AJAX call in componentDidMount to populate local component state.

The example API returns a JSON object like this:

```javascript
{
  "items": [
    { "id": 1, "name": "Apples",  "price": "$2" },
    { "id": 2, "name": "Peaches", "price": "$5" }
  ] 
}
```

```javascript
class MyComponent extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoaded: false,
      items: []
    };
  }

  componentDidMount() {
    fetch("https://api.example.com/items")
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            items: result.items
          });
        },
        // Note: it's important to handle errors here
        // instead of a catch() block so that we don't swallow
        // exceptions from actual bugs in components.
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
      )
  }

  render() {
    const { error, isLoaded, items } = this.state;
    if (error) {
      return <div>Error: {error.message}</div>;
    } else if (!isLoaded) {
      return <div>Loading...</div>;
    } else {
      return (
        <ul>
          {items.map(item => (
            <li key={item.name}>
              {item.name} {item.price}
            </li>
          ))}
        </ul>
      );
    }
  }
}
```
???
ref: https://reactjs.org/docs/faq-ajax.html
---
# React-API

ref: https://reactjs.org/docs/react-api.html?no-cache=1
---
