# DDD-and-East
Doing some experimentation to see how DDD concept are compatibles with East paradigm

##Abstract for DDDEurope

Since its definition by Alan Key, the object oriented paradigm have seen its nature corrupted by procedural artefacts thinking.
One could consider that "our big industry failure" [1], by which all software where once built as CRUD system, is the consequence of such corruption. 
Major improvements were allowed by DDD and its idea of placing the model at the core of the design. 

Although DDD models are way more expressive than they CRUD counterparts 
– by showing code intent with the “Tell don’t ask” principle, they often contains procedural artefacts. 
Meanwhile, a movement called EAST has reconnected to the original object paradigm. 
Its idea is to restore the “Big idea [that] is messaging” [3]: objects are black box totally abstracting their implementation and
they communicate with others object through defined protocols, the interfaces. 

In this talk we will rediscover original intent through the EAST principles, what their benefits are and how to design such objects. 
Then we will discuss how EAST can allow to better model domain interactions and how we can bridge the gap between DDD designs and EAST designs. 
