@extends('layouts.master')

@section('content')


<div class="hero" ng-controller="SlideshowController" ng-click="closeMenu()">

	<div class="hero-fixed-container">

		<div class="pauser" ng-mouseenter="pause(false)" ng-mouseleave="play()"></div>

		<i class="fa fa-pause pause-icon slide-animation" ng-show="paused"></i>

		<div class="slide" ng-show="slide[0]">
			<div class="slide-content">
				<h1>Some aspire to make millions, I aspired to give a million</h1>
				<h2>The book Giving God’s Way relives this journey and shares the valuable insight Mike learned on the way.</h2>
				<h3>Giving Gods Way by Mike Labahn - Available Summer 2015 </h3>
			</div>
		</div>


		<div class="slide" ng-show="slide[1]">
			<div class="slide-content">
				<h1><span class="georgia">&ldquo;</span>What Insight!<span class="georgia">&rdquo;</span></h1>
				<h2>Mike LaBahn has experienced God’s blessings flow through his business, family, church &amp; community because he has functioned as a river instead of a reservoir.</h2>
				<h3>Rick Haberly / Cottage Grove, Oregon</h3>
			</div>
		</div>


		<div class="slide" ng-show="slide[2]">
			<div class="slide-content">
				<h1><span class="georgia">&ldquo;</span>Mike has lived this book as long as I have known him... some 35 years.<span class="georgia">&rdquo;</span></h1>
				<h2>He speaks with integrity and thoroughness. You will be enriched as you read.</h2>
				<h3>Robin Hadfield / Woodinville, Washington</h3>
			</div>
		</div>


		<div class="slide" ng-show="slide[3]">
			<div class="slide-content">
				<h1><span class="georgia">&ldquo;</span>Mike knows what he is talking about!<span class="georgia">&rdquo;</span></h1>
				<h2>When Mike speaks about finances one should listen, take notes and put it into action.</h2>
				<h3>Nathan Daniel / San Diego, California</h3>
			</div>
		</div>


		<div class="slide" ng-show="slide[4]">
			<div class="slide-content">
				<h1><span class="georgia">&ldquo;</span>I've personally watched him live these truths out.<span class="georgia">&rdquo;</span></h1>
				<h2>As Mike’s Pastor I have witnessed His sacrificial, consistent &amp; substantial giving. Mike’s life has demonstrated the fulfillment of Jesus’ words, It is more blessed to give than to receive.</h2>
				<h3>Dave Hoffman / San Diego, California</h3>
			</div>
		</div>
		

		<div class="slide" ng-show="slide[5]">
			<div class="slide-content">
				<h1>Practical yet providential, providential yet predictable.</h1>
				<h2>This succinct little book shares some of the basic, yet universal truths in the Book of Proverbs that are vital guidelines to your personal life, to your business, and to your family success... until the end of time!</h2>
				<h3>Proverbs by Mike Labahn - Available Mid 2015 </h3>
			</div>
		</div>

		<div class="slide" ng-show="slide[6]">
			<div class="slide-content">
				<h1><span class="georgia">&ldquo;</span>...Sitting in a taco shop, I wrote on a paper napkin a single sentence that would change the course of our lives...<span class="georgia">&rdquo;</span></h1>
				<h2>&nbsp;</h2>
				<h3>Labahn Life Story by Mike Labahn - Expected fall 2015</h3>
			</div>
		</div>

		<div class="slide" ng-show="slide[7]">
			<div class="slide-content">
				<h1><span class="georgia">&ldquo;</span>You couldn't have a better guide than Mike Labahn.<span class="georgia">&rdquo;</span></h1>
				<h2>As one who has learned the joy of giving I heartily encourage you to join in this adventure. –On GIVING GODS WAY</h2>
				<h3>Mark Hoffman / San Diego, California</h3>
			</div>
		</div>

		<div class="slide-indicator"><i class="fa fa-long-arrow-left hidden" ng-click=""></i> <span class="bold">0@{{ slide.indexOf(true) + 1 }}</span> / 0@{{ slide.length }} <i class="fa fa-long-arrow-right" ng-click="next()" ng-mouseenter="pause(true)" ng-mouseleave="play()"></i></div>

		<img class="portrait" src="{{ asset('img/mike.png') }}">

	</div>

</div>

@stop
