<?php

/**
 * Child Theme van defaultManuscript, enige verschil is abstract toegevoegd in article_summary.tpl
 * dit template wordt gebruikt in issue-view
 * NB. Om een child theme te kunnen gebruiken, moet de Parent ook enabled zijn voor het betreffende tijdschrift
 */
import('lib.pkp.classes.plugins.ThemePlugin');

class DefaultManuscriptHucPlugin extends ThemePlugin {

    public function init() {
        $this->setParent('defaultmanuscriptchildthemeplugin');
    }

    /**
     * @return string
     */
    function getDisplayName() {
        return 'Manuscript-HuC';
    }

    /**
     * @return string
     */
    function getDescription() {
        return 'Child theme of defaultManuscript. Parent theme must be enabled as well.';
    }
}

?>