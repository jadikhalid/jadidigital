<?php
// Détection ou définition de la langue
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';

$translations = [
    'fr' => [
        'contact' => 'Contact',
        'auteur' => 'JADI DIGITAL - Ingénierie logicielle & Conseil Metier',
        'hero_title' => 'Nous conçevons vos outils numériques de demain.',
        'hero_desc' => 'Forte de son expertise dans l\'ingénierie logicielle et le conseil stratégique, notre agence met son savoir-faire au service de vos projets digitaux les plus ambitieux.',
        'portfolio' => 'Explorer notre Portfolio',
        'expertise_mini_title' => 'Notre Savoir-Faire',
        'expertise_title' => 'Expertise Technique & Métier',
        'expertise_descr1_title' => 'Expertise Full Stack',
        'expertise_descr1_desc' => 'Maîtrise avancée des écosystèmes de développement web modernes (Front & Back End) pour des applications performantes',
        'expertise_descr2_title' => 'Développement "AI-First"',
        'expertise_descr2_desc' => 'Conception d\'architectures logicielles intégrant l\'IA générative pour des fonctionnalités prédictives et sur-mesure.',
        'expertise_descr3_title' => 'Vision Business',
        'expertise_descr3_desc' => 'Maîtrise complète de la chaîne de valeur et des enjeux financiers pour des architectures technologiques rentables et optimisées.',
        'team_mini_title' => 'Notre Equipe',
        'team_title' => 'Un Duo gagnant',
        'footer_title' => 'Expertise Tech & Conseil Stratégique.',
        'portfolio_title' => 'Mon Portfolio',
        'portfolio_sub_title' => 'Réalisations',
        'portfolio_sub_title2' => 'Projets JADI DIGITAL',
        'project1_desc' => 'Système de gestion de réclamations clients haute performance. Intègre une logique métier complexe.',
        'project1_subtitle1' => 'Base de données relationnelle optimisée',
        'project1_subtitle2' => 'Automatisation d\'emails (SMTP)',
        'project_details' => 'Voir le projet',
        // Page Contact
        'contact_retour' => 'Retour',
        'contact_mini_title' => 'Parlons de votre projet',
        'contact_title' => 'Contactez-moi',
        'contact_nom' => 'Nom Complet',
        'contact_objet' => 'Objet',
        'contact_sendButton' => 'Envoyer le message',
        // Page Project 1
        'project1_page_mini_title' => 'Étude de Cas',
        // ... ajoutez toutes vos clés ici
    ],
    'en' => [
        'contact' => 'Contact',
        'auteur' => 'JADI DIGITAL - Software Engineering & Business Consulting',
        'hero_title' => 'We design the digital tools of tomorrow.',
        'hero_desc' => 'With its expertise in software engineering and strategic consulting, our agency provides its expertise to your most ambitious digital projects.',
        'portfolio' => 'Explore Our Portfolio',
        'expertise_mini_title' => 'Our Skills',
        'expertise_title' => 'Technical & Business Expertise',
        'expertise_descr1_title' => 'Full Stack Expertise',
        'expertise_descr1_desc' => 'Advanced mastery of modern web development ecosystems (Front & Back End) for performant and scalable applications',
        'expertise_descr2_title' => 'AI-First Development',
        'expertise_descr2_desc' => 'Designing software architectures integrating AI-generated intelligence for predictive and on-demand features.',
        'expertise_descr3_title' => 'Business Vision',
        'expertise_descr3_desc' => 'Full mastery of value chains and financial risks for scalable and profitable technology architectures.',
        'team_mini_title' => 'Our Team',
        'team_title' => 'A Winning Duo',
        'footer_title' => 'Tech Expertise & Strategic Consulting.',
        'portfolio_title' => 'My Portfolio',
        'portfolio_sub_title' => 'Works',
        'portfolio_sub_title2' => 'Projects JADI DIGITAL',
        'project1_desc' => 'High-performance claim management system. Integrates a complex business logic.',
        'project1_subtitle1' => 'Optimized relational database',
        'project1_subtitle2' => 'Email automation (SMTP)',
        'project_details' => 'Project\'s details',
        // Page Contact
        'contact_retour' => 'Back',
        'contact_mini_title' => 'Let\'s talk about your project',
        'contact_title' => 'Contact Me',
        'contact_nom' => 'Full Name',
        'contact_objet' => 'Subject',
        'contact_sendButton' => 'Send Message',
        // Page Project 1
        'project1_page_mini_title' => 'Case Study',
        // ... ajoutez toutes vos clés ici
    ]
];

function __($key)
{
    global $lang, $translations;
    return $translations[$lang][$key] ?? $key;
}
