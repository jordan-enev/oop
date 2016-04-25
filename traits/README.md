# Traits

## Definition
Traits are a mechanism for code reuse in single inheritance languages such as PHP. A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes living in different class hierarchies.

[Source](http://php.net/manual/en/language.oop5.traits.php)

## Case
> Imagine we have three classes - Women, Man and Child. Let's say that Women and Man classes have their own specific behaviour like singing (Women) and playing football (Man). So let's assume that their children will inherit the specific parents' behaviours. How can we do that in a singe inheritance language?

## Purpose
Of course we can create a parent class Person (that is inherited by the Women, Man and Child classes), but in that scenario we will violate [Single responsibility principle](https://en.wikipedia.org/wiki/Single_responsibility_principle).
Another option is the Child to extend the Man, which in turn to extend the Women, but we will violate the laws of nature.
So **Traits to the rescue**. We can create two Traits those contain the specific behaviours - WomenTrait and ManTrait. In that case we don't violate Single responsibility principle and we don't duplicate any code.

## UML Diagram

## Examples