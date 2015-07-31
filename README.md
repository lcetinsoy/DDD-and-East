# DDD-and-East
Doing some experimentation to see how DDD concept are compatibles with East paradigm

##Abstract for DDDEurope

Since its definition by Alan Key, the nature of object oriented paradigm has been corrupted by procedural thinking artefacts.
One could explain "our big industry failure" [1], by which all software where once built as CRUD system, as the consequence of such corruption. 
DDD emerged as a response and allowed major improvements in the software industry by placing the model at the core of the design. 
However, although DDD models are way more expressive than they CRUD counterparts 
– by showing code intent with the “Tell don’t ask” principle, they often still contains procedural artefacts. 
Independantly, a movement called EAST[2] has tried to reconnect to the original object paradigm by restoring
the “Big idea [that] is messaging” [3]: objects are black box totally abstracting their implementation and
they communicate with each other through defined protocols, the interfaces. 

In this talk we will rediscover OOP original intent through the EAST principles, what their benefits are and how to design such objects. 
Then we will discuss how EAST can allow a better modeling of domain interactions and how we can bridge the gap between DDD designs and EAST designs. 


###References

[[1] Greg Young - Our grand failure](http://herdingcode.com/herding-code-51-greg-young-on-our-grand-failure-thoughts-on-dddd/)

[[2] James Ladden - A design Compass - East oriented](http://jamesladdcode.com/2007/02/02/draft-a-design-compass-east-oriented/) 

[3] Alan Key

[[4] Frederic Hardy - Voyage vers l'est (In french)](http://blog.est.voyage/phpTour2015/) 

[[5]  Peter Di Salvo - Dazzled and confused] (https://thesecretsquad.wordpress.com/2014/10/25/dazed-and-confuzzled/)  
