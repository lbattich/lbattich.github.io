<em>A Battleship Potemkin</em> is a generative algorithm-based film that appropriates Sergei Eisenstein’s 1925 masterpiece, and delegates all editing decisions to the pseudo-random generator algorithm of your web browser. The original shots and their duration are preserved, but their sequential arrangement in montage is dictated by the algorithm, which produces a unique and endless film on each viewing.

Here is the process of making the work, something like field notes and such technicalities.
<ul>
	<li>First thing: write a program that will choose and play at random from a number of clips in the film.</li>
</ul>
After a long period of trial and error (and learning some new developing skills in the way!), I came up with a solution that works well. I'm not much of a developer, so I'm not sure if it is <em>the</em> best solution, but it does it nicely. The program flow is basically this (click to enlarge):

<a href="http://lucasbattich.com/home/wp-content/uploads/2014/04/potemkin-diagram.png"><img class="alignnone size-medium wp-image-217" src="http://lucasbattich.com/home/wp-content/uploads/2014/04/potemkin-diagram-102x300.png" alt="Diagram" width="102" height="300" /></a>

&nbsp;

Before tackling Eisenstein's long film, I started trying out the program on a little animation film I made years ago, called <a href="https://vimeo.com/13908196"><em>Baroque</em></a>. I also decided to leave the opening titles as the first clip.
<ul>
	<li>Second: mark out all clips timings. I quickly figured out the best way for this will be to use Final Cut or Premiere Pro (or something with basic editing and marking tools) to create markers on the start of each clip in the original film. I did this on Final Cut Express (on my laptop, I didn't like the idea of spending hours on end at the labs at University). This is clip number 1000, and still quite a way to go:</li>
</ul>
<a href="http://lucasbattich.com/home/wp-content/uploads/2014/04/FC-viewer.jpg"><img class="alignnone size-medium wp-image-218" src="http://lucasbattich.com/home/wp-content/uploads/2014/04/FC-viewer-300x295.jpg" alt="FC-viewer" width="300" height="295" /></a>

FinalCut Viewer

&nbsp;
<ul>
	<li>Next step: get all the clip times into the program. The program deals with time only in seconds, so I had to convert all the markers from the 00:00:00.frams format into seconds, then put it all in the html5 script. This started to be tricky and was the main thing that sometimes put me off continuing with the project, because it was something too time-consuming to do manually, even with copy/paste. Finally I found a way to export all marker timings from FCE into a text file via QuickTime. How? <a href="http://www.dvinfo.net/forum/archive/index.php/t-475638.html" target="_blank">Check it out here.</a></li>
</ul>
The Quicktime text file looks something like this (a little messy?):

<code>{QTtext}{font:Geneva}{bold}{clipToTextBox:on}{size:12}{textColor: 0, 0, 0}{backColor: 65535, 65535, 65535}
{justify:center}{timeScale:100}{width:0}{height:20}{timeStamps:absolute}{language:0}{textEncoding:256}
[00:00:00.00] Marker 1 [00:00:21.48] {textEncoding:256}Marker 2 [00:00:25.44] {textEncoding:256}Marker 3
[00:00:28.16] {textEncoding:256}Marker 4 ... ... ...
</code>

The text file is handy, but will still require copy/paste or some sort of work to extract the timings in seconds. So I had to write a script to extract the <code>00:00:21.48</code> values and convert them to seconds, and put them neatly in a list, all automatically. <a href="http://lucasbattich.com/potemkin/converter.html" target="_blank">(The converter lives here, by the way)</a>
<ul>
	<li>That's pretty much it. It has been a time-consuming project and learned much in the way. But there's something much more important for me than the coding and problem-solving trial inherent in developing. This is Eisenstein film itself, which through this project I had the chance of slow-vieweing (ver very slow!), something that, even though tiring at times, has been very enjoyable. It made me appreciate his film much more than I had done previously (even when I had watched several times before!).</li>
</ul>
The final work is still a bit buggy when it plays online (the long loading time is meant to offset some of this, but still not quite perfect...). The film is sourced from the Internet Archive (credits on this!) online. But it works much better playing as an app directly from desktop. I might still have to find a way to make it into a self-contained app. (any seasoned developers out there wishing to collaborate please get in touch!)

Hope you enjoy the <a href="http://lucasbattich.com/potemkin/potemkin.html" target="_blank">film</a>!

&nbsp;