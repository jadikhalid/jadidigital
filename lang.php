<?php
// Détection de la langue (par défaut 'fr')
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';

$translations = [
  'fr' => [
    'meta_title' => 'JADI DIGITAL | Ingénierie logicielle & IA',
    'nav_about' => 'À propos',
    'nav_services' => 'Nos services',
    'nav_expertises' => 'Nos expertises',
    'nav_realisations' => 'Réalisations',
    'nav_faq' => 'FAQ',
    'nav_contact' => 'Contact',
    'nav_cta' => 'Démarrer un projet',
    'hero_badge' => 'Ingénierie logicielle & IA',
    'hero_title' => 'Nous transformons vos idées <br />en produits digitaux <em>performants.</em>',
    'hero_sub' => 'JADI DIGITAL conçoit et développe vos applications web et solutions IA sur-mesure — avec rigueur, expertise technique et un engagement total sur la qualité de chaque livraison.',
    'hero_cta_start' => 'Démarrer un projet',
    'hero_cta_portfolio' => 'Voir nos réalisations',
    'stat_exp_label' => "Ans d'expérience<br />combinée",
    'stat_countries_label' => "Pays d'intervention",
    'stat_agile_label' => "Projets livrés<br />en Agile",
    'stat_ai_label' => "Architecture<br />AI-native",
    'services_tag' => 'Nos services',
    'services_title' => 'Ce que nous faisons concrètement',
    'service_web_title' => 'Développement Web Full Stack',
    'service_web_desc' => 'De la landing page à la plateforme SaaS, nous développons vos applications web et mobile sur-mesure.',
    'service_ai_title' => 'Architecture IA',
    'service_ai_desc' => "Nous intégrons l'IA dans vos projets : LLM, RAG, automatisation intelligente.",
    'service_api_title' => 'Intégration & API',
    'service_api_desc' => 'Nous connectons vos systèmes et outils métier via des APIs robustes et sécurisées.',
    'contact_title' => 'Discutons de votre projet',
    'contact_subtitle' => 'Réponse sous 24h. Premier échange gratuit.',
    'form_name' => 'Nom complet *',
    'form_email' => 'Email professionnel *',
    'form_company' => 'Entreprise',
    'form_subject' => 'Sujet *',
    'form_message' => 'Votre message *',
    'form_submit' => 'Envoyer le message',
    'footer_desc' => 'Ingénierie logicielle & solutions IA sur-mesure.',
    'footer_copyright' => '© 2026 JADI DIGITAL — Tous droits réservés'
  ],
  'en' => [
    'meta_title' => 'JADI DIGITAL | Software Engineering & AI',
    'nav_about' => 'About',
    'nav_services' => 'Services',
    'nav_expertises' => 'Expertise',
    'nav_realisations' => 'Works',
    'nav_faq' => 'FAQ',
    'nav_contact' => 'Contact',
    'nav_cta' => 'Start a project',
    'hero_badge' => 'Software Engineering & AI',
    'hero_title' => 'We transform your ideas <br />into <em>high-performing</em> digital products.',
    'hero_sub' => 'JADI DIGITAL designs and develops your custom web applications and AI solutions — with rigor, technical expertise, and total commitment to quality.',
    'hero_cta_start' => 'Start a project',
    'hero_cta_portfolio' => 'View our works',
    'stat_exp_label' => "Years of combined<br />experience",
    'stat_countries_label' => "Countries of operation",
    'stat_agile_label' => "Projects delivered<br />using Agile",
    'stat_ai_label' => "AI-native<br />Architecture",
    'services_tag' => 'Our services',
    'services_title' => 'What we actually do',
    'service_web_title' => 'Full Stack Web Development',
    'service_web_desc' => 'From landing pages to SaaS platforms, we build your custom web and mobile applications.',
    'service_ai_title' => 'AI Architecture',
    'service_ai_desc' => 'We integrate AI into your projects: LLM, RAG, intelligent automation.',
    'service_api_title' => 'Integration & API',
    'service_api_desc' => 'We connect your systems and business tools via robust and secure APIs.',
    'contact_title' => "Let's talk about your project",
    'contact_subtitle' => 'Response within 24h. First consultation is free.',
    'form_name' => 'Full Name *',
    'form_email' => 'Professional Email *',
    'form_company' => 'Company',
    'form_subject' => 'Subject *',
    'form_message' => 'Your message *',
    'form_submit' => 'Send message',
    'footer_desc' => 'Software engineering & custom AI solutions.',
    'footer_copyright' => '© 2026 JADI DIGITAL — All rights reserved'
  ]
];

/**
 * Fonction de traduction
 */
function __($key)
{
  global $lang, $translations;
  return $translations[$lang][$key] ?? $key;
}

/**
 * Génère une URL avec le paramètre de langue conservé
 */
function lang_url($new_lang)
{
  $params = $_GET;
  $params['lang'] = $new_lang;
  return '?' . http_build_query($params);
}
