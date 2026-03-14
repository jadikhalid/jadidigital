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
        'expertise_descr1_title' => 'Expertise en développement Web Full Stack',
        'expertise_descr1_desc' => 'Maîtrise avancée des écosystèmes de développement web modernes (Front & Back End) pour des applications performantes',
        'expertise_descr2_title' => 'Architecture & Design Logiciel',
        'expertise_descr2_desc' => 'Conception de structures logicielles modulaires et pérennes, garantissant une maintenance simplifiée et une scalabilité technique optimale.',
        'expertise_descr3_title' => 'Stratégie & Pilotage Produit',
        'expertise_descr3_desc' => 'Accompagnement de bout en bout: de la découverte produit à la livraison agile, garantissant l\'alignement total entre vos enjeux métier et la solution technique.',
        // Section Equipe
        'team_mini_title' => 'Notre Equipe',
        'team_title' => 'Un Duo gagnant',
        'khalid_titre' => 'Fondateur & Direction Technique',
        'khalid_desc' => 'Ingénieur d\'État diplômé de l\'EMI, Khalid orchestre la vision technologique de JADI DIGITAL. Expert en systèmes critiques et en développement "AI-First".',
        'sara_titre' => 'Direction Produit France',
        'sara_desc' => 'Product Owner certifiée, Sara est votre interlocutrice privilégiée à Lille. Elle assure le pont stratégique entre vos objectifs métiers et l\'exécution technique.',
        'cv_download' => 'Télécharger le CV',
        // Fin Section Equipe
        // Section OUTILS
        'tools_mini_title' => 'Outils',
        'tools_title' => 'Méthodes & Piles Technologiques',
        // Fin Section OUTILS
        'footer_title' => 'Expertise Tech & Conseil Stratégique.',
        'portfolio_title' => 'Notre Portfolio',
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
        'expertise_descr1_title' => 'Full Stack Web Development Expertise',
        'expertise_descr1_desc' => 'Advanced mastery of modern web development ecosystems (Front & Back End) for performant and scalable applications',
        'expertise_descr2_title' => 'Software Architecture & Design',
        'expertise_descr2_desc' => 'Modular and persistent software structures, ensuring simplified maintenance and optimal technical scalability.',
        'expertise_descr3_title' => 'Product Strategy & Pilotage',
        'expertise_descr3_desc' => 'From product discovery to agile delivery, ensuring alignment between business objectives and technical solution.',
        // Section Equipe
        'team_mini_title' => 'Our Team',
        'team_title' => 'A Winning Duo',
        'khalid_titre' => 'Founder & Technical Director',
        'khalid_desc' => 'EMI graduate, Khalid orchestrates the technological vision of JADI DIGITAL. An expert in critical systems and "AI-First" development.',
        'sara_titre' => 'France Product Owner',
        'sara_desc' => 'Certified Product Owner, Sara is your trusted liaison in Lille. She ensures strategic alignment between business objectives and technical execution.',
        'cv_download' => 'Download CV',
        // Fin Section Equipe
        // Section OUTILS
        'tools_mini_title' => 'Tools',
        'tools_title' => 'Methods & Technological Stacks',
        // Fin Section OUTILS
        'footer_title' => 'Tech Expertise & Strategic Consulting.',
        'portfolio_title' => 'Our Portfolio',
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
