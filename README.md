# KeyboardGuide

KeyboardGuide is a website in the works, designed to help people decide what mechanical keyboard they should buy, based on their preferred switch, number of keys etc.  It's going to be a collaborative website, where users can add new keyboards (via the `add.php` form).

See the [reddit thread](http://www.reddit.com/r/MechanicalKeyboards/comments/24g6q5/) for discussion.  All quotations below are from that thread.

## The Point of the Website

> Are you considering adding a search feature where you can plug in all of your criteria and generate a list of keyboards sharing those criteria? Or if there are no results, perhaps show the closest matches? I proposed this idea a while back and I think it would be incredibly helpful for people looking to buy a new keyboard. Unfortunately, I don't know how to code and can't do it myself. [&hellip;]

&ndash; RaVNzCRoFT

>> That's exactly what the point of the website is. I'll add this comment and reply as clarification in the README.

&ndash; jocap

## Hosting

> Where are you planning to set this up?

> I'm decent with PHP, and I'll fork/star your repo. Shoot me a message anywhere if you'd like advice.

&ndash; johnfonte

>> I have a Webfaction account where I could host it. It should do fine in the beginning. **Edit:** Heroku just extended their PHP support. That's a good alternative, seeing as how it's tightly integrated with Git.

>> **Update:** Just published the current state of the repository at [http://keyboard.fictional.in/](http://keyboard.fictional.in/) (temporary address, of course, a subdomain of my website).

&ndash; jocap

## Why PHP?

> I don't see why anyone would EVER use plain PHP. It's like programming a self-driving car in assembly. Use something more civilised like Node.js, Django, Flask or even Rails!
Mind if I try my hand at "re-making" your site?

&ndash; CrateMuncher

>> The thing is that PHP is a very simple web programming language that is accessible to a lot of people. I've used Node.js, Django, Rails, etc. I've even created an MVC framework in Node, but I chose PHP for its accessibility and simplicity. The site isn't really all that complicated.

&ndash; jocap

>>> \> PHP<br>
>>> \> Simplicity<br>
>>> \> http://me.veekun.com/blog/2012/04/09/php-a-fractal-of-bad-design/<br>
>>> top kek<br>
>>> </4chan>

&ndash; CrateMuncher

>>>> I'm aware of PHP's faults. I've read the article you linked. I agree with it. However, it does not change my decision to use PHP. It is, in many cases, badly designed (like order of arguments for similar built-in functions), but that doesn't mean it isn't simple -- which it is.

>>>> Please, I've even created [http://fictional.in/PerlOverPHP/](http://fictional.in/PerlOverPHP/) to try to convince people to choose Perl over PHP. PHP sucks in many ways, but where it excels is in accessibility, availability, and simplicity.

&ndash; jocap

## Planned Features

### API

> Bravo, crowd sourcing this sort of information could make things easier for people trying to get their feet wet. Imagine a Bot that could access the information in KeyboardGuide and spit out answers in threads or the IRC channel.

&ndash; SL89

>> That's an awesome idea. An API. I'll add that to the README!

&ndash; jocap

## Screenshots

![Add Keyboard](http://i.imgur.com/R7JUVbv.png)

![About Page](http://i.imgur.com/QkrxlXM.png)