<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

$a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, '/app/app/Resources', array(0 => '/app/app'))) && false ?: '_'};
$b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

$d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($b);

$e = new \Symfony\Component\Config\Loader\LoaderResolver();
$e->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
$e->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$e->addLoader($c);
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
$e->addLoader($d);
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $d));
$e->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $d));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, $e);
