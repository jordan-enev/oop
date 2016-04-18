# Polymorphism

## Case
> Let's say we have a blog and we want to list some articles from a few sources. In our demo case we will parse the articles from a csv and a text file.

## Purpose
The **benefits** from using **polymorphism** in our example is that *we can execute a series of exactly the same methods to all objects*, those are passed to ArticlesCollection::render() method.
Otherwise we have to validate whether the passed object has the necessary methods, which leads to redundant validation code.
Imagine if we have to execute more than one methods on the passed objects, then the validation will flood our render method with unnecessary complexity.

## UML Diagram
![Polymorphism UML diagram](https://github.com/jordan-enev/oop/blob/master/polymorphism/php/uml_diagram.png)

## Examples
* [php](https://github.com/jordan-enev/oop/tree/master/polymorphism/php)