**KeyboardGuide** is a website in the works, designed to help people decide what mechanical keyboard they should buy, based on their preferred switch, number of keys etc.  It's going to be a collaborative website, where users can add new keyboards (via the `add.php` form).

# Discussion

See the [reddit thread](http://www.reddit.com/r/MechanicalKeyboards/comments/24g6q5/) for discussion.  All quotations below are from that thread.  GitHub usernames are preceded by an @ symbol, the other usernames are from reddit.

## The Point of the Website (2014-04-30)

RaVNzCRoFT:

> Are you considering adding a search feature where you can plug in all of your criteria and generate a list of keyboards sharing those criteria? Or if there are no results, perhaps show the closest matches? I proposed this idea a while back and I think it would be incredibly helpful for people looking to buy a new keyboard. Unfortunately, I don't know how to code and can't do it myself. [&hellip;]

jocap:

>> That's exactly what the point of the website is. I'll add this comment and reply as clarification in the README.

***

**Summary:**

## Hosting (2014-04-30)

johnfonte:

> Where are you planning to set this up?

> I'm decent with PHP, and I'll fork/star your repo. Shoot me a message anywhere if you'd like advice.

jocap:

>> I have a Webfaction account where I could host it. It should do fine in the beginning. **Edit:** Heroku just extended their PHP support. That's a good alternative, seeing as how it's tightly integrated with Git.

>> **Update:** Just published the current state of the repository at [http://keyboard.fictional.in/](http://keyboard.fictional.in/) (temporary address, of course, a subdomain of my website).

***

**Summary:** Temporary website live at [http://keyboard.fictional.in/](http://keyboard.fictional.in/), following the latest commit (manually updated by @jocap).

## Why PHP? (2014-05-01)

CrateMuncher:

> I don't see why anyone would EVER use plain PHP. It's like programming a self-driving car in assembly. Use something more civilised like Node.js, Django, Flask or even Rails!
Mind if I try my hand at "re-making" your site?

jocap:

>> The thing is that PHP is a very simple web programming language that is accessible to a lot of people. I've used Node.js, Django, Rails, etc. I've even created an MVC framework in Node, but I chose PHP for its accessibility and simplicity. The site isn't really all that complicated.

CrateMuncher

>>> \> PHP<br>
>>> \> Simplicity<br>
>>> \> http://me.veekun.com/blog/2012/04/09/php-a-fractal-of-bad-design/<br>
>>> top kek<br>
>>> &lt;/4chan&gt;

jocap:

>>>> I'm aware of PHP's faults. I've read the article you linked. I agree with it. However, it does not change my decision to use PHP. It is, in many cases, badly designed (like order of arguments for similar built-in functions), but that doesn't mean it isn't simple -- which it is.

>>>> Please, I've even created [http://fictional.in/PerlOverPHP/](http://fictional.in/PerlOverPHP/) to try to convince people to choose Perl over PHP. PHP sucks in many ways, but where it excels is in accessibility, availability, and simplicity.

***

**Summary:** PHP has many faults, but will be used for its accessibility, availability, and simplicity (although its simplicity, however interpreted, may arguably be one of its faults).

**Notes:** "Plain PHP" is not the case anymore, as a [migration to Zend Framework 2 is planned](#plain-php-vs-framework-2014-05-01).

## Plain PHP vs Framework (2014-05-01)

ithcy:

> I could give PHP help, but that's the easy part - I think the more important question is how are you going to set up your database? For example you could store data about:

> * Manufacturer's part number(s)
> * Size - 60%, 75%, TKL, 104-key, other
> * Keycap set compatibility - as in, what are the sizes of the bottom row keys? Is there an F row? etc.
> * Stabilizers (if Cherry MX switches) - Costar, Cherry, N/A
> * Stock keycap material - ABS, PBT, POM, other
> * Switch mount - Plate, PCB, other
> * Media keys?
> * Hardware configurable (DIP switches)?
> * Detachable USB cable?
> * Additional USB ports - None, 1, other
> * etc.

> The more metadata you can collect and cross-index about each keyboard, the more useful the app can be. I'm sure people here could provide lots of help with all of the features that differentiate one mechanical from another.

> The easier you make it for yourself to collect all of this data, the easier it becomes to build a recommendation engine (expert system), comparison engine, search engine, etc. This is a strong argument for using some kind of CMS up front rather than writing everything yourself - if you want to add a new field to store the keycap material, you just add it and it shows up in the CRUD. You don't have to update the schema, write the view code, write the validation code, test... Good data is the important part, not the application code.

HalfCent:

> I can contribute either way, but would you be open to using a PHP framework instead of flat PHP? Professionally I use ZF2 + Doctrine2, but would be open to others. Building out what others have showed interest in, like an API, is much, much easier with proper application design. I'd be happy to skeleton out what you already have in a proper framework and go from there. I have time today and this weekend, and this really wouldn't take long to build out.

> That all being said, it's your project!

jocap:

>> Hm. I'm considering it, since ithcy gave me another pro of using a framework. I just have never found a framework for PHP I like. I had to use Smarty on a project for Swedish TV4, but was never fond of it. I liked Django on Python for its admin interface. Does Zend have anything like that?
>> Either way, a framework probably is the way to go. I'm open to Zend, since it seems very mature, so it would be great if you could create the base application, and I'll read up on the documentation.

HalfCent:

>>> Unfortunately, Zend does not have admin scaffolding like Django does. I believe Symfony2 does, but I've never architected a Synfony project, only bug fixes on them. Database modeling is similar to Django when you're using Doctrine as your ORM. I'll get started in a little bit and should have a base aplpication up tonight!

jocap:

>>>> All right! It's better anyway to use Zend if we have someone who is familiar with it.

***

**Summary:** Using a framework instead of plain PHP was suggested and accepted.  KeyboardGuide will be migrated by HalfCent to Zend Framework 2, which was chosen because HalfCent used it.

## API (2014-04-30)

> Bravo, crowd sourcing this sort of information could make things easier for people trying to get their feet wet. Imagine a Bot that could access the information in KeyboardGuide and spit out answers in threads or the IRC channel.

&ndash; SL89

>> That's an awesome idea. An API. I'll add that to the README!

&ndash; jocap

***

**Summary:** API added as a planned feature.

## Data Collection (2014-05-02)

matt3o:

> just wanted to let you know that a similar project is about to be released under the kbdb.io domain. If you are interested in collaborating with it please get in contact (it's an open source, community based project)

jocap:

>> Oh, I wasn't aware of that. There doesn't seem to be much information on it online. Where can I learn more?
>> **Update:** I found the deskthority thread and it seems as though it's been dead for almost a year, but maybe I'm mistaken. If it is in fact going to happen, it seems to be more of a database of keyboards, which we certainly could take advantage of -- it would practically eliminate the need for an Add Keyboard section.

***

**Summary:** There appears to be a similar project, [kbdb.io](http://kbdb.io), more oriented to data collection and creating a database of different keyboards (see [deskthority thread](http://deskthority.net/keyboards-f2/kbdb-t6205.html)).  However, the last post on said thread was posted in August 2013, so there is a possibility the project is dead.  If it does launch, KeyboardGuide could plug into their database and the need for our own Add Keyboard section and API would practically be eliminated.

# Screenshots (as of commit d8e01e73b1)

![Add Keyboard](http://i.imgur.com/R7JUVbv.png)

![About Page](http://i.imgur.com/QkrxlXM.png)