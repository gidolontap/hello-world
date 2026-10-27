<?php
declare(strict_types=1);

function escape(string $value): string
{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

$name = 'Virginia Dolontap';
$githubUrl = 'https://github.com/gidolontap';
$repositoryUrl = 'https://github.com/gidolontap/hello-world';

$projects = [
    [
        'number' => '01',
        'title' => 'Hello World Portfolio',
        'description' => 'A personal website for practicing web development, GitHub Flow, branches, and pull requests.',
        'tags' => ['Portfolio', 'GitHub'],
        'url' => $repositoryUrl,
        'status' => 'Practice project',
    ],
    [
        'number' => '02',
        'title' => 'Your next project',
        'description' => 'Replace this placeholder with something you build. Explain what it does and what you learned.',
        'tags' => ['Placeholder'],
        'url' => null,
        'status' => 'Add your work here',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
        name="description"
        content="Virginia Dolontap's personal portfolio and web development learning projects."
    >
    <meta name="color-scheme" content="light">
    <title><?= escape($name) ?> | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header">
        <div class="container navigation">
            <a class="brand" href="#home" aria-label="Virginia Dolontap home">
                <span class="brand-mark" aria-hidden="true">VD</span>
                <span><?= escape($name) ?></span>
            </a>

            <nav aria-label="Main navigation">
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main id="main">
        <section class="hero container" id="home" aria-labelledby="hero-title">
            <div class="hero-copy">
                <p class="eyebrow">A personal space on the web</p>
                <h1 id="hero-title">
                    Learning by<br>
                    <span>building.</span>
                </h1>
                <p class="hero-description">
                    Hi, I’m <?= escape($name) ?>. I’m learning web development
                    and GitHub collaboration—one small project at a time.
                </p>

                <div class="actions">
                    <a class="button button-primary" href="#projects">
                        Explore my projects <span aria-hidden="true">↗</span>
                    </a>
                    <a class="text-link" href="<​?= escape($githubUrl) ?>">
                        Find me on GitHub <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <aside class="profile-card" aria-labelledby="profile-title">
                <div class="card-topline">
                    <span>THE LEARNING JOURNEY</span>
                    <span aria-hidden="true">✦</span>
                </div>
                <div class="monogram" aria-hidden="true">VD<span>.</span></div>
                <h2 id="profile-title">Small steps.<br>Thoughtful progress.</h2>
                <p>
                    A place to share projects, practice new skills,
                    and document what comes next.
                </p>
                <div class="card-footer">
                    <span>Current focus</span>
                    <strong>Web development & GitHub</strong>
                </div>
            </aside>
        </section>

        <section class="section about-section" id="about" aria-labelledby="about-title">
            <div class="container about-grid">
                <div>
                    <p class="eyebrow">01 / About</p>
                    <h2 id="about-title">A little curiosity.<br>A lot to explore.</h2>
                </div>
                <div class="about-copy">
                    <p>
                        I’m learning how to turn ideas into simple, usable
                        websites. This portfolio is part of that process:
                        a space to experiment, improve, and share my work.
                    </p>
                    <p>
                        Along the way, I’m practicing version control and
                        collaboration through branches, commits, and pull requests.
                    </p>
                    <div class="tags" aria-label="Learning topics">
                        <span>HTML & CSS</span>
                        <span>PHP</span>
                        <span>Git & GitHub</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section container" id="projects" aria-labelledby="projects-title">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">02 / Projects</p>
                    <h2 id="projects-title">A work in progress.</h2>
                </div>
                <p>Experiments, practice, and room to grow.</p>
            </div>

            <div class="project-grid">
                <?php foreach ($projects as $project): ?>
                    <article class="project-card">
                        <div class="project-meta">
                            <span><?= escape($project['number']) ?></span>
                            <span><?= escape($project['status']) ?></span>
                        </div>

                        <h3><?= escape($project['title']) ?></h3>
                        <p><?= escape($project['description']) ?></p>

                        <div class="tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span><?= escape($tag) ?></span>
                            <?php endforeach; ?>
                        </div>

                        <?php if ($project['url'] !== null): ?>
                            <a class="project-link" href="<​?= escape($project['url']) ?>">
                                View repository <span aria-hidden="true">↗</span>
                            </a>
                        <?php else: ?>
                            <span class="project-placeholder">
                                Your next idea belongs here
                            </span>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container contact-section" id="contact" aria-labelledby="contact-title">
            <div class="contact-panel">
                <div>
                    <p class="eyebrow">03 / Connect</p>
                    <h2 id="contact-title">Let’s keep learning.</h2>
                    <p>Explore the code or suggest an improvement on GitHub.</p>
                </div>
                <a class="button button-light" href="<​?= escape($githubUrl) ?>">
                    Visit my GitHub <span aria-hidden="true">↗</span>
                </a>
            </div>
        </section>
    </main>

    <footer class="container site-footer">
        <p>&copy; <?= date('Y') ?> <?= escape($name) ?>.</p>
        <p>Built with PHP & CSS. Improved one commit at a time.</p>
    </footer>
</body>
</html>
