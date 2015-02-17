<?php
/**
 * CBOX.org: Feature Overview
 *
 */
?>
	<div class="section-break green testimonials-break">
		<h2>CBOX is a platform for creating easy and powerful community websites.</h2>
	</div>

	<div class="intro-text-wrap">

		<div class="intro-text">
	Commons In A Box (CBOX) is a free software project aimed at turning the infrastructure that successfully powers the <a href="http://commons.gc.cuny.edu">CUNY Academic Commons</a> into a free, distributable, easy-to-install package. Commons In A Box is a project of the <a href="http://www.cuny.edu">City University of New York</a> and the <a href="http://www.gc.cuny.edu">Graduate Center, CUNY</a> and is made possible by a generous grant from the <a href="http://www.sloan.org/">Alfred P. Sloan Foundation</a>
		</div>

	</div>

<div class="wow slideInLeft curated-plugins homepage-block row">

    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/curated-plugins.png">
	</div>

	<div class="column eight">

		<h2>Curated Plugins</h2>
			CBOX automatically installs BuddyPress and a number of carefully vetted BuddyPress plugins onto an existing WordPress site to create a feature-rich social network.  It takes the guesswork out of deciding which plugins are necessary and compatible with one another.
			<p>
			In addition to installing plugins necessary to a Commons site, CBOX lists recommended plugins that can be easily installed from the CBOX dashboard.  These are not crucial, but may be great additions, depending your site’s configuration.
	</div>

</div>

<div class="wow slideInRight collaboration-tools homepage-block row">

	<div class="column eight">

		<h2>Tools for Collaboration</h2>
		CBOX provides the tools your community needs to work together.
Add collaborative work spaces to your community through shared documents that can be edited by members of an entire group. All changes to group documents are stored in revision histories, which means that older versions can be restored if needed.
	<p>
Documents can be linked to Discussion Groups and have different privacy levels. Want to work on a document together? The revision system and one-editor-at-a-time prevention system keeps things backed up and organized. 
	</div>

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/buddypress-docs.png">
	</div>

</div>

<div class="wow slideInLeft member-profiles homepage-block row">


    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/member-profiles.png">
	</div>

	<div class="column eight">

		<h2>Member Profiles</h2>
		
Members of your community can build public profiles to share and aggregate personal information. As the Commons administrator, you set up profile fields relevant for your community, such as academic interests, positions, or affiliations.
	<p>
The Member Directory lets members search for other members based on these profile fields, and connect with each other through private messages or public mentions.

	</div>


</div>

<div class="wow slideInRight discussion-groups homepage-block row">

	<div class="column eight">

		<h2>Discussion Groups</h2>
Boost engagement by letting community members create and join groups that match their interests and needs. A great way to administrate, teach, discuss, or just share commons interests, groups come with a forum, an announcement system, and the wiki-like “Docs” editor.
		<p>
Want to discuss something in private? Groups can be public, private or completely hidden. Access is granted by the Group Moderator(s) to keep group interactions secure.
	</div>

		    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-groups.png">
	</div>


</div>


<div class="wow slideInLeft docs homepage-block row">


	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/docs.png">
	</div>

	<div class="column eight">

		<h2>Docs</h2>

Part wiki, part document manager, part shared Dropbox, Docs provides the tools your community needs to collaborate. The revision system and one-editor-at-a-time prevention system keeps document versions backed up and nicely organized.  

<p>
Documents are easily shared via hyperlinks, and can be assigned different privacy levels. All documents can be tagged, sorted, and filtered with ease.

	</div>


</div>

<div class="wow slideInRight sitewide-wiki homepage-block row">

	<div class="column eight">

		<h2>Sitewide Wiki</h2>
Let your entire community build a knowledge repository with CBOX’s built-in Wiki.  A rich text editor allows for easy links, images, and formatting.

<p>
	Content on both the public wiki and private wikis can be tagged, categorized, and organized in parent/child hierarchies.  Revisions are tracked, and it is easy to revert back to former versions.
	</div>

		    <div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wiki.png">
	</div>


</div>


<div class="wow slideInLeft activity-streams homepage-block row">


	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/activity-stream.png">
	</div>

	<div class="column eight">

		<h2>Activity Streams</h2>

Allow members to easily keep track of what’s going on across your community with the Activity Stream. New blog posts, forum discussions and group activity are collected in personal streams, and members can quickly get an overview of the activity of their colleagues.

		<p>

Members can also post status updates about their work progress, share useful resources or simply use the stream to see the latest items published across your network.
	</div>


</div>

<div class="wow slideInRight forums homepage-block row">

	<div class="column eight">

		<h2>Discussion Forums</h2>
		
For in-depth discussions about various topics, group forums are the perfect solution. Let community members create topics and see threaded discussion unfold. Create separate support forums to help members get started using your Commons or add a forum to one of your discussion groups.

		<p>

Once members start to participate in forum discussions, they’ll want to stay current with what’s going on. Individual members configure how they want their email notifications arrive – separately, or in daily or weekly digests. Even replying to a topic straight from their email is possible.

	</div>

	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-forums.png">
	</div>

</div>

<div class="wow slideInLeft community-powered homepage-block row">

	<div class="column eight">
		<?php if ( bp_has_members( 'user_id=0&type=random&max=15&per_page=15' ) ) : ?>	
			<div id="member-grid" class="avatar-block">
					<?php while ( bp_members() ) : bp_the_member(); ?>
					<div class="item-avatar">
						<a class="user-avatar" href="<?php bp_member_permalink() ?>" title="<?php bp_member_name(); ?>"><?php bp_member_avatar('type=full&width=75&height=75') ?></a>
					</div>
					<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>

	<div class="column eight">

		<h2>Community Powered</h2>
The Commons In A Box community is full of people who use CBOX to power their networks. Visit the <a href="http://commonsinabox.org/groups/help-support/forum/">CBOX forums</a> to receive help from our community and leave feedback and suggestions for the development team. You’ll find extensive documentation, development tutorials and various tips and tricks about how to customize your site.
		<p>
	
		Create your profile on Commonsinabox.org and help us make CBOX better. Are you a developer? Help us improve CBOX and start contributing code through <a href="https://github.com/cuny-academic-commons/" target="_blank">GitHUb</a>. 
	</div>

</div>

<div class="wow slideInRight much-more homepage-block row">

	<div class="column eight">

		<h2>And so much more!</h2>

Commons in a Box is built upon WordPress, the biggest Open Source software in the world. There are hundreds of volunteers all over the world working every day to make WordPress faster, easier and more secure. 
	
	<p>
	
There is a healthy ecosystem of freelance developers and consultants who are experienced in working on WordPress projects. By leveraging the power of WordPress and BuddyPress, we’re able to provide a free, distributable, and easy-to-install package for creating Commons communities.
		 </p>
	</div>

	
	<div class="column eight">
		<IMG SRC="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/discussion-forums.png">
	</div>

</div>