# Screws and Software 

What can metal screws teach us about coding?

When screws are being made, they undergo rigorous bending and rolling. This is often known as working the metal. Once fully wrought, these metal pellets are fired in an oven, which might seem strange at first. After all, why take something after it’s been shaped and soften it up by heating?

<figure><a href="https://www.youtube.com/watch?v=3kxcw08p_oY"><img src="https://i3.ytimg.com/vi/3kxcw08p_oY/hqdefault.jpg" alt="Youtube video about how bolts are made" /></a>
<figcaption>"How It's Made: Nuts and bolts"</figcaption>
</figure>

Well, the process of forming the screws<sup>1</sup>, while necessary, introduces microscopic regions of high torque, high compression, and high rarefaction. These stresses and imperfections make the screws problematic to work with, since they can cause the fasteners to break prematurely, leading to issues or even injury. You wouldn’t want to build a building with these overworked screws.

Luckily, there is a solution: heat. Since metal is in many ways a kind of crystal, the increased motion of the atoms with heat allows the metal to recrystallize. Regions of high stress and high internal torque are allowed to reduce and even disappear. (This is one of the rare cases in life where two wrongs can make a right.) Once the screws have been heated, they are returned to normal temperature and can then be used in projects.

<figure><a href="https://en.wikipedia.org/wiki/Recovery_(metallurgy)#Process"><img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Polygonization_animation.gif" alt="Image illustrating that several opposite defects may join to cancel each other out in a metal grain structure." /></a>
<figcaption>When two opposite dislocations are encouraged to meet up, they cancel out.</figcaption>
</figure>

This is not so different from what happens to software as we work on it. Exerting our will onto the code, while of utmost necessity, gradually makes the code harder to work with. Sticking points, such as:
* mismatched interfaces
* fudged types
* unvalidated assumptions
* stringified values, and
* too much responsibility per module

are easily introduced, increasing obstacles and decreasing project velocity. You could even think of this like laundry or dishes accumulating in the house; a bit is fine, but too much and everything becomes unnavigable.

If we can add even a low-effort refactor phase in our development cycle, we can consistently cause these sticking points to be relaxed, making our next iteration faster and more effective. The next time you are planning a project, I would recommend to try budgeting 20% of time to performing refactors and micro-rewrites, and see how the project velocity responds.

For more insights about Software Development Lifecycle (SDLC) or thoughts about tech and business, please subscribe via [RSS](http://blog.quinefoundation.com/rss.xml), or you can [find us on LinkedIn](https://www.linkedin.com/company/quine-foundation).

Footnotes:
----

1. For our purposes, it’s simplest to call them screws, but actually we are speaking of bolts, and you can watch the manufacturing process [in this video](https://www.youtube.com/watch?v=3kxcw08p_oY).

