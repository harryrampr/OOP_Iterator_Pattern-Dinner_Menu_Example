## Iterator Pattern (OOP) - Dinner Menu Example

We are sharing some simple PHP code, showing the use of
the [Iterator Pattern](https://en.wikipedia.org/wiki/Iterator_pattern). You will see how modern
versions of PHP, supporting Classes and Interfaces, make it easy to implement the Iterator Pattern using this language.

### About It

The Iterator pattern is a behavioral design pattern
in [object-oriented programming](https://en.wikipedia.org/wiki/Object-oriented_programming) that provides a way to
access the elements of an aggregate object sequentially without exposing its underlying structure. It separates the
traversal of a collection from its implementation, allowing clients to iterate over elements in a consistent manner.

### History

The Iterator pattern was first introduced by the "Gang of Four" (Erich Gamma, Richard Helm, Ralph Johnson, and John
Vlissides) in their influential
book ["Design Patterns: Elements of Reusable Object-Oriented Software"](https://en.wikipedia.org/wiki/Design_Patterns),
commonly known as the Gang of Four (GoF) book, published in 1994.

However, the concept of iteration itself predates the formalization of the Iterator pattern. The concept of iterating
over a collection or sequence of elements can be traced back to the early days of programming languages and data
structures. Languages like ALGOL, FORTRAN, and COBOL had constructs for looping over arrays and performing operations on
each element.

### Intent

The Iterator pattern is used to provide a uniform and encapsulated way of accessing the elements of a collection,
abstracting away its internal structure. It aims to simplify iteration over various types of collections, promote code
reuse, and decouple the client from the specific implementation details of the collection.

### Structure

- **Iterator:** Defines the interface or abstract class for traversing elements of a collection, including methods like
  hasNext() and next().
- **ConcreteIterator:** Implements the Iterator interface, keeping track of the current position and providing logic for
  traversing a specific collection.
- **Aggregate:** Declares the interface or abstract class for creating an Iterator object, usually with a method like
  createIterator().
- **ConcreteAggregate:** Implements the Aggregate interface, representing a specific collection object, and creating a
  ConcreteIterator for that collection.

### How it Works

1. The client requests an Iterator object from the Aggregate by calling the createIterator() method.
2. The Aggregate returns a ConcreteIterator object, which is specific to the collection type.
3. The client uses the Iterator's hasNext() method to check if there are more elements.
4. The client calls the next() method to retrieve the next element from the collection via the Iterator.
5. The Iterator keeps track of the current position and provides the next element in the collection.
6. The client can iterate over the collection, performing operations on each element using the Iterator.

### Benefits

- Encapsulates the traversal logic and internal structure of a collection, promoting information hiding and abstraction.
- Provides a standardized interface for iterating over different types of collections.
- Simplifies iteration code and promotes code reuse.
- Allows multiple iterations to occur concurrently on the same collection.
- Supports different traversal behaviors through different Iterator implementations.
- Enables the addition of new collection types without modifying existing code.

### Applications

- **Collections and Data Structures:** The Iterator pattern is extensively used in programming languages and frameworks
  to provide a standardized way of traversing collections such as arrays, lists, sets, and maps.
- **File Systems:** When working with file systems, the Iterator pattern can be used to iterate over files and
  directories, providing a consistent way to access and process each element.
- **Database Query Results:** In database systems, the Iterator pattern can be employed to iterate over query results,
  allowing clients to retrieve and process data in a sequential manner.
- **GUI Components:** User interface frameworks often utilize the Iterator pattern to iterate over UI components,
  enabling operations such as event handling, validation, or rendering.
- **Parsing and Lexing:** During parsing and lexing tasks, the Iterator pattern can be useful to iterate over tokens or
  syntax elements, making it easier to analyze and manipulate source code or other structured data.
- **Network Communication:** When dealing with network communication protocols or streams of data, the Iterator pattern
  can assist in processing packets or messages in a sequential manner.
- **Tree Traversal:** In tree-like data structures, such as binary trees or composite structures, the Iterator pattern
  can enable traversal and processing of nodes in a hierarchical manner.
- **Menu Navigation:** In menu systems, the Iterator pattern can be employed to navigate through menu items, allowing
  users to iterate over options and select desired actions.
- **Game Development:** Game engines often utilize the Iterator pattern to iterate over game objects, entities, or
  events, facilitating game logic and interactions.
- **Simulation and Modeling:** In simulation and modeling scenarios, the Iterator pattern can assist in iterating over
  elements in the simulation space, updating their states, and processing interactions.

### Other Examples

An example of the Iterator pattern is a library catalog system. The catalog contains various types of books (fiction,
non-fiction, reference) stored in different data structures (arrays, linked lists). The Iterator pattern allows a client
to iterate over the books in the catalog without worrying about the underlying storage mechanism. The catalog implements
an Aggregate interface with a createIterator() method, returning a ConcreteIterator specific to the catalog type. The
client can use the Iterator to sequentially access and process each book in the catalog, regardless of its internal
implementation. This enhances flexibility, code reusability, and separation of concerns.