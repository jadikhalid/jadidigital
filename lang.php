<?php
// Détection ou définition de la langue
$lang = isset($_GET['lang']) && $_GET['lang'] === 'fr' ? 'fr' : 'en';

$translations = [
    'fr' => [
        'contact' => 'Me contacter',
        'auteur' => 'Khalid Jadi - Entrepreneur Tech & Ingénieur Full Stack',
        'hero_title' => 'Je conçois vos outils numériques de demain.',
        'hero_desc' => 'Ancien cadre dirigeant reconverti dans l\'ingénierie logicielle, je mets 20 ans d\'expertise métier au service de vos projets digitaux les plus ambitieux.',
        'portfolio' => 'Explorer mon Portfolio',
        'expertise_mini_title' => 'Mon Savoir-Faire',
        'expertise_title' => 'Expertise Technique & Métier',
        'expertise_descr1_title' => 'Expertise Full Stack',
        'expertise_descr1_desc' => 'Maîtrise avancée des écosystèmes de développement web modernes (Front & Back End) pour des applications performantes',
        // ... ajoutez toutes vos clés ici
    ],
    'en' => [
        'contact' => 'Contact Me',
        'auteur' => 'Khalid Jadi - Tech Entrepreneur & Full Stack Engineer',
        'hero_title' => 'I design the digital tools of tomorrow.',
        'hero_desc' => 'With 20 years of executive experience now applied to software engineering, I am ready to help you tackle your most ambitious digital projects.',
        'portfolio' => 'Explore my Portfolio',
        'expertise_mini_title' => 'My Skills',
        'expertise_title' => 'Technical & Business Expertise',
        'expertise_descr1_title' => 'Full Stack Expertise',
        'expertise_descr1_desc' => 'Advanced mastery of modern web development ecosystems (Front & Back End) for performant and scalable applications',

        // ... traductions anglaises
    ]
];

function __($key)
{
    global $lang, $translations;
    return $translations[$lang][$key] ?? $key;
}
