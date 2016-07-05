# Composition over inheritance

## Intro
In my recent Design patterns reading I shortlisted the following assertion **Composition over inheritance** for a future research. At first sight It sounded strange to me and I decided to review it.

## Definition
Achieve code reusability, scalability and loose coupling with a wrapper class (composition of objects) instead of classical inheritance. Inheritance leads to tight coupling and if you want to have a class, that reuses methods of another classes, then in result your class will violates some of conventional programming principles like [The Liskov Substitution Principle (LSP)](https://en.wikipedia.org/wiki/Liskov_substitution_principle), [Single responsibility principle (SRP)](https://en.wikipedia.org/wiki/Single_responsibility_principle).

Please check the example case for more details.

## Case
> Imagine that in the beginning we have two classes - `Airplane` class and `FighterAirplane`. Base `Airplane` can fly, departure and arrive. It's naturally that `FighterAirplane` has the same behavior. At first look it looks reasonable `FighterAirplane` to extend (inherit) the `Airplane` class. At this moment there isn't any problem. Neither LSP nor SRP are violated.
One beautiful day we decide our project to support `Bird` as flying objects (birds can fly too, let's assume they are using the same fly engine as the airplanes). Of course we want to reuse Airplane's fly functionality, but how can we do it without LSP, SRP violation?

## Purpose
- Of course `Bird` class can inherit (extend) `Airplane` but it's not meaningful (birds aren't airplanes, they only have the same fly engine) and we'll violate LSP and SRP. Here comes **Composition**. We can move fly functionality to another class - `FlyEngine`. So our classes have to receive `FlyEngine` as object and wrap fly functionality in their own method. This action is known as Composition.
- Another good purpose of Composition is that at runtime we can receive different types of `FlyEngine` and `Bird` class will support all of them (Polymorphism).
With Inheritance in contrast if we want to implement different combinations of `Bird` and fly functionality, then we have to create different class for each one combination. For example: `Bird` has to inherit `Airplane`, `Bird` has to inherit `FighterAirplane`. This scenario illustrates tight coupling and isn't a good practice.

Please refer to code examples for more details.

## How to choose the right strategy (Composition or Inheritance)
- Does subclass (`FighterAirplane`) want to expose the complete interface of base class (`Airplane`) such that subclass can be used where base class is expected? Indicates Inheritance.
- Does subclass (`Bird`) only want only some/part of the behavior exposed by base class (`Airplane`)? Indicates need for Composition.

## UML Diagram
![Composition UML diagram](https://github.com/jordan-enev/oop/blob/master/composition-over-inheritance/php/uml_diagram.png)

## Examples
* [php](https://github.com/jordan-enev/oop/tree/master/composition-over-inheritance/php)

## Credits
* [Gishu](http://stackoverflow.com/questions/49002/prefer-composition-over-inheritance)
* [Mattias Johansson](https://medium.com/humans-create-software/composition-over-inheritance-cb6f88070205#.1jch1w3do)