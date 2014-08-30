<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // bwf_contact
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_bwf_contact;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bwf_contact');
            }

            return array (  '_controller' => 'BWF\\ContactBundle\\Controller\\ContactController::contacterAction',  '_route' => 'bwf_contact',);
        }
        not_bwf_contact:

        if (0 === strpos($pathinfo, '/admin')) {
            // bwf_site_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'BWF\\SiteBundle\\Controller\\AdminController::indexAction',  '_route' => 'bwf_site_admin',);
            }

            // bwf_site_liste_articles
            if ($pathinfo === '/admin/articles') {
                return array (  '_controller' => 'BWF\\ArticlesBundle\\Controller\\ArticleController::listeArticlesAdminAction',  '_route' => 'bwf_site_liste_articles',);
            }

            // bwf_site_liste_formations
            if ($pathinfo === '/admin/formations') {
                return array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\FormationController::ListeFormationsAdminAction',  '_route' => 'bwf_site_liste_formations',);
            }

            // bwf_site_liste_participants
            if ($pathinfo === '/admin/participants') {
                return array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\ParticipantController::listeParticipantsAction',  '_route' => 'bwf_site_liste_participants',);
            }

            // bwf_site_liste_videos
            if ($pathinfo === '/admin/videos') {
                return array (  '_controller' => 'BWF\\VideosBundle\\Controller\\VideoController::listeVideosAdminAction',  '_route' => 'bwf_site_liste_videos',);
            }

        }

        // bwf_site_pages
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_site_pages')), array (  '_controller' => 'BWF\\SiteBundle\\Controller\\CategorieController::detailAction',));
        }

        if (0 === strpos($pathinfo, '/admin/formations')) {
            // bwf_formations_add
            if ($pathinfo === '/admin/formations/add') {
                return array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\FormationController::addFormationAction',  '_route' => 'bwf_formations_add',);
            }

            // bwf_formations_edit
            if (0 === strpos($pathinfo, '/admin/formations/editer') && preg_match('#^/admin/formations/editer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_formations_edit')), array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\FormationController::editFormationAction',));
            }

            // bwf_formations_delete
            if (0 === strpos($pathinfo, '/admin/formations/delete') && preg_match('#^/admin/formations/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_formations_delete')), array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\FormationController::deleteFormationAction',));
            }

        }

        // bwf_formations_homepage
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_formations_homepage')), array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\FormationController::listeFormationsAction',));
        }

        // bwf_formations_participant_liste
        if ($pathinfo === '/admin/participants') {
            return array (  '_controller' => 'BWFFormationsBundle:Participants:listeParticipants',  '_route' => 'bwf_formations_participant_liste',);
        }

        // bwf_formations_participant_add
        if ($pathinfo === '/participant/ajouter') {
            return array (  '_controller' => 'BWF\\FormationsBundle\\Controller\\ParticipantController::addParticipantAction',  '_route' => 'bwf_formations_participant_add',);
        }

        if (0 === strpos($pathinfo, '/admin/videos')) {
            // bwf_videos_add
            if ($pathinfo === '/admin/videos/add') {
                return array (  '_controller' => 'BWF\\VideosBundle\\Controller\\VideoController::addVideoAction',  '_route' => 'bwf_videos_add',);
            }

            // bwf_videos_edit
            if (0 === strpos($pathinfo, '/admin/videos/edit') && preg_match('#^/admin/videos/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_videos_edit')), array (  '_controller' => 'BWF\\VideosBundle\\Controller\\VideoController::editVideoAction',));
            }

            // bwf_videos_delete
            if (0 === strpos($pathinfo, '/admin/videos/delete') && preg_match('#^/admin/videos/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_videos_delete')), array (  '_controller' => 'BWF\\VideosBundle\\Controller\\VideoController::deleteVideoAction',));
            }

        }

        // bwf_videos_homepage
        if ($pathinfo === '/videos') {
            return array (  '_controller' => 'BWF\\VideosBundle\\Controller\\VideoController::listeVideosAction',  '_route' => 'bwf_videos_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/article')) {
            // bwf_articles_add
            if ($pathinfo === '/admin/article/add') {
                return array (  '_controller' => 'BWF\\ArticlesBundle\\Controller\\ArticleController::addArticleAction',  '_route' => 'bwf_articles_add',);
            }

            // bwf_articles_edit
            if (0 === strpos($pathinfo, '/admin/article/edit') && preg_match('#^/admin/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_articles_edit')), array (  '_controller' => 'BWF\\ArticlesBundle\\Controller\\ArticleController::editArticleAction',));
            }

            // bwf_articles_delete
            if (0 === strpos($pathinfo, '/admin/article/delete') && preg_match('#^/admin/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bwf_articles_delete')), array (  '_controller' => 'BWF\\ArticlesBundle\\Controller\\ArticleController::deleteArticleAction',));
            }

            // bwf_articles_homepage
            if ($pathinfo === '/admin/articles') {
                return array (  '_controller' => 'BWF\\ArticlesBundle\\Controller\\ArticleController::listeArticlesAdminAction',  '_route' => 'bwf_articles_homepage',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
