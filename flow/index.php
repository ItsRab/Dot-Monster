<?php // Page specific variables and pull in the header
    $page_title = "A Typical Client Project Flow";
    $page_desc = "An example of how I usually work with a web design project. A client project process.";
    $current_page = "flow";

    $header = $_SERVER['DOCUMENT_ROOT'];
    $header .= "/_header.php";
    include_once($header);
?>

        <div class="constraint">
            <div class="main" role="main">

                <section>
                    <h1>Client Project Flow</h1>
                    <p class="lead">Every project needs order. Here’s a typical process I would follow for a web design project to help keep things in check.</p>
                    <p>It’s just a guideline, we’ll do what’s best for your project. There will be no “sign-off”, just “go-on”. If something isn’t right we’ll work on it until it’s spot-on and we’ll go-on! Afterall, who wants to be locked in, we want to create not restrain.</p>
                    <a href="/hire/" class="btn--red">Happy? Let’s Work Together</a>
                    <h2>Discovery</h2>
                    <p><strong>Goal:</strong> Map out requirements</p>
                    <p>We’ll chat about your project, ideally face to face or over the phone. We’ll look at your goals, analytics, brand, personality, competitors and your inspiration. This will allow us both to map out what it is you’re really after.</p>
                    <p>I’ll then go off for a day or two and collate some ideas from other sites which I think have elements that fit and we’ll create a moodboard. We’ll discuss it and refine it.</p>
                    <h2>Style Tiles</h2>
                    <p><strong>Goal:</strong> Set look and feel</p>
                    <p>Using the moodboard and feedback, I’ll spend another day or two creating a Style Tile&mdash;a canvas of higher fidelity ideas&mdash;focusing on what’s important to you, such as personality and typography. This isn’t a website at this stage, it’s the art direction. We’ll discuss and refine it. The feedback here won’t be make the logo bigger&mdash;but it might be about getting the right personality from the typeface. This Style Tile will form the base of our work.</p>
                    <h2>Content</h2>
                    <p><strong>Goal:</strong> Deliver the right content</p>
                    <p>Before we can transform the Style Tile into a website, we need to work on the content that’ll form the base of the design. We’ll work out the hierarchy to ensure we deliver the right content to the visitor at the right time. It’ll help us make design decisions.</p>
                    <h2>Layout</h2>
                    <p><strong>Goal:</strong> Pull together the looks and content</p>
                    <p>With the content sorted, we’ll look at structuring it into some layout. At this stage it’ll be a cross between wireframes, style tiles and user interface work. I like to get to the highest fidelity mocks as soon as possible, so rather than work out wireframes, then fill in the content, then apply some design, I like to blend these steps somewhat to streamline the process and bounce feedback quicker.</p>
                    <h2>Design</h2>
                    <p><strong>Goal:</strong> Make a website</p>
                    <p>By now we have a pretty good idea of what things are going to look like. We have or content structured, our branding nailed, and some layout elements mocked up. Now it’s time to make a website! We’ll usually start with the homepage and work out from there.</p>
                    <p>This phase might also include designing icon sets, illustration work, and even refining our Style Tile with any new findings to help move things along.</p>
                    <h2>Development</h2>
                    <p><strong>Goal:</strong> Code it up</p>
                    <p>Sometimes some of the front end development work will come in the design phase if it was quicker to set out the design in the browser rather than in Photoshop. Whatever was missed or needs finished up on the front end is completed and we’ll move onto integrating the back end to your Content Management System such as WordPress or Perch if the project needs one.</p>
                    <h2>Testing and Handoff</h2>
                    <p><strong>Goal:</strong> Make sure we’re all happy</p>
                    <p>Speaks for itself really, we’ll both make sure everything is just right and we’re all happy and get this all wrapped up!</p>
                    <a href="/hire/" class="btn--green">Alright, let’s go!</a>
                </section>

            </div><!-- .main -->
        </div><!-- .constraint -->

<?php
    $footer = $_SERVER['DOCUMENT_ROOT'];
    $footer .= "/_footer.php";
    include_once($footer);
?>