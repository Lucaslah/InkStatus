something something
===================

*go crazy?  don't mind if i do...*

a little asynchronous functional programming library.

  * [why?](#why)
  * [how?](#how)
  * [what?](#what)

why?
----

There are plenty of collections libraries out there (think
[underscore][0], [lodash][1], etc) and plenty of asynchronous ones
([async][2] comes to mind), but none of them seem to support
asynchronous mapping over plain old JavaScript objects.  So I wrote
this for that use-case, and while I was at it generalized it to
handle both objects and arrays.

how?
----

Use the package manager of your choice to install.  We support

```sh
# npm
npm install --save something-something

# component
component install couchand/something-something

# bower
bower install something-something
```

Require it in your project and start asynchronizing.

```coffeescript
__ = require 'something-something'

double = (value, cb) -> cb null, value * 2
ba_s = (key, value, cb) -> cb null, /ba./.test key

original =
  foo: 1
  bar: 2
  baz: 3

__.map original, double, (error, doubled) ->
  __.filter doubled, ba_s, (error, result) ->
    assert Object.keys(result).length is 2
    assert result.bar is 4
    assert result.baz is 6
```

Simple, right?

what?
-----

The standard functional collections methods are here.

  * [map](#map)
  * [filter](#filter)
  * [any](#any)
  * [all](#all)
  * [what, no reduce?](#what-no-reduce)

All methods work equally well for arrays and objects.

### map ###

```
__.map(collection, iterator, [complete])

collection = Array
           | Object
iterator   = (value, cb) -> result
           | (key, value, cb) -> result
           | (key, value, collection, cb) -> result
complete   = (error, results) ->
```

Standard `map` function, known in some circles as `collect`.  The
iterator function is called for each element in the collection.  Its
behavior is guessed from the airity of the function, so don't try any
fancy business with `arguments` here.

The complete callback is called with the `results` collection once
every iteration is complete.  If any iteration callsback with an error
the map immediately fails, calling back with that error.

### filter ###

```
__.filter(collection, predicate, [complete])

collection = Array
           | Object
predicate  = (value, cb) -> Boolean
           | (key, value, cb) -> Boolean
           | (key, value, collection, cb) -> Boolean
complete   = (error, results) ->
```

Standard `filter` function, also known as `select`.  The predicate
is called for each element in the collection.  Again its behavior is
assumed based on the airity.  The result is coerced to a Boolean.

The complete callback is called with the filtered `results` once
every predicate is complete.  If any predicate callsback with an error
the filter immediately fails, calling back with that error.

### any ###

```
__.any(collection, predicate, [complete])

collection = Array
           | Object
predicate  = (value, cb) -> Boolean
           | (key, value, cb) -> Boolean
           | (key, value, collection, cb) -> Boolean
complete   = (error, result) ->
```

Short-circuiting boolean or (aka `some`).  Callsback `true` as soon as
any of the predicates callsback `true`.  Callsback `false` if every
predicate callsback `false`.

Callsback with an error if any predicate callsback in error before one
callsback `true`.  This means it swallows some errors and not others,
which may not be desirable.

### all ###

```
collection = Array
           | Object
predicate  = (value, cb) -> Boolean
           | (key, value, cb) -> Boolean
           | (key, value, collection, cb) -> Boolean
complete   = (error, result) ->
```

Short-circuiting boolean and (aka `every`).  Callsback `false` as soon
as a single predicate callsback `false`.  Callsback `true` if every
predicate callsback `true`.

Callsback with an error if any predicate callsback in error before one
callsback `false`.  This means it swallows some errors and not others,
which may not be desirable.

### what, no reduce? ###

This library is about eagerly evaluating a sequence of asynchronous
callbacks massively parallel.  Reduce is by nature a series algorithm.
If you think there's a good way to write reduce in the same style as
the other methods please do submit a pull request.

##### ╭╮☲☲☲╭╮ #####

[0]: http://underscorejs.org
[1]: http://lodash.com
[2]: https://github.com/caolan/async
