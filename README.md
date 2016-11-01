# pwp
# This is the personal website project of Matthew R Fisher
# This website will serve as a web based business card

## Milestone 1 Feedback
"Electronic business card" is a great way to describe what you're going for on the final site. Your Audience and Purpose are very clearly specified, and your Goal is very focused on earning you a job. Great job with this section. Throughout development of the site, be sure to think of how to make your website stand out to employers over other possible hires, but also still have all the required data to make you a good choice. I'm sure you can figure this out considering the work I've seen you do before. 

Your Persona is done very well. It goes into great detail on who Johan is and why he would want to hire a junior developer. I also wanna give you some praise for mentioning all of the different methods that employers use to view possible candidates - github, social media, resumes, and websites. Great job! 

Your Use Case is also very well done - although it would have been nice if you went into more detail on WHY he called you next day. Sure, he looked at your site, but what stood out to him? What, in your eyes, is the thing that really caught his attention and made him decide to give you a call over all the other candidates? Think about this as you proceed with development.

### Edits &amp; Suggestions 
- When you create a new php file in PhpStorm, it will create those annoying timestamp comments at the top of your code. They have no use, so delete them so your code looks better. (or just select create a file and end the name with .php, that avoids this and lets you create any type of file without having to be specific.)

Overall, fantastic job! You've passed in tier IV - the best you can do. You are free to move on into milestone 2a (which I see you've already done.)

## Milestone 2&alpha; Feedback
Excellent wireframes. What you've created here is clear, well defined, and will provide you with a solid guide for the development phase of your project. Well done. I am concerned about keeping a very narrow scope in mind for this project, especially with the amount of work Capstone will require, so I've asked a few questions below about your content plan and navigation options.

I love that you've designed different nav menus for mobile devices and wide screens. We can selectively hide the mobile nav and simultaneously load the wide screen nav through the use of CSS @media queries. As a matter of fact - Bootstrap has built-in CSS and pre-defined classes that will enable you to do this out-of-the-box. See here: http://getbootstrap.com/css/#responsive-utilities

This should essentially be a one-page site, so I'm not sure of the necessity for so many dropdown options on the nav menu. Having so many options may actually make it more difficult for a user to navigate your site. Are "About Me", "Other Work" and "Contact" options alone insufficient for your content plan? I'd like to see the 7 navigation options your have planned here whittled down to about 3 or 4.

A few questions:
- Unless you have a large body of content that you plan to feature on your "About Me" page, I would consider combining "Basic" and "Background". Or "Background" and "Resume" perhaps? What might make a logical combination here? 
- What is the difference between your "Gallery" section and "Other Work" section? And what's the content plan for "Other Work" - will these be external links? Also curious as to why "Other Work" is given priority in the top level of your nav over "Gallery". For now, I would consider combining these sections unless the content really needs to be separated due to length or specialization.
- I would consider combining your contact form, "Email Me" link, and any other contact info together on the "Contact" page. No need for three separate nav links for these sections. You could also optionally include a email link/icon in your footer alongside your social media icons.
- What is your plan for your resume? Do you plan to format an HTML formatted version of your resume, link to a document, or both? You would gain SEO benefit from your resume keywords if you opted to feature an HTML formatted version, FYI.

TL; DR: Unless your content necessitates seven levels of separation, I would strongly consider keeping things as simple and combining things where you can. Your plan is good, but I see room for simplification and streamlining here. Remember that the target scope is that of a one-page site for MVP. The plan you have outlined here appears to be crossing over closer to that of a 5 page site, and that's out of scope - even if the content is being injected onto a single page.

What are your plans for featuring your gallery content? Looks like you have a slider component in your wireframes. Bootstrap does come with a pre-built image slider, but it's not that great. I would take a look at the [Owl Carousel](http://owlcarousel2.github.io/OwlCarousel2/index.html) or [Flickity](http://flickity.metafizzy.co/) instead. And if you want more of a gallery thumbnail style gallery with a "lightbox" effect, [Swipebox](http://brutaldesign.github.io/swipebox/) works well too.

For your Social Media icons, take a look [Font Awesome](http://fontawesome.io/). Very easy to use, simple and straightforward.

Prior to our in-class coverage on the Bootstrap framework this Thursday, have a look at the [Official Bootstrap Documentation](http://getbootstrap.com/) and the [Deep Dive Bootstrap Material](https://bootcamp-coders.cnm.edu/class-materials/bootstrap/).

Really nice work here overall. Your Milestone 2&alpha; passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

### Edits &amp; Suggestions
- You can delete the auto-generated php comments that PhpStorm puts at the top of new files. See lines 1-24 in  milestone-2.php.
- For future reference, it's cleaner to put all of your CSS and JavaScript in external files as opposed to directly in the HTML `<head>` tag.
- Also cleaner and much more scalable to adjust image sizes in your CSS file rather than use the `height` and `width` attributes in your HTML.
