<?php

namespace Home\Service;

/**
 * Interface HomePageContentInterface
 *
 * @package Home\Service
 */
interface HomePageContentInterface
{
    /**
     * Home Page Content
     *
     * @return string
     * @throws \PDOException
     */
    public function homePageContent();

}

