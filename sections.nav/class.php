<?php

declare(strict_types=1);

namespace Pwd\Components;

(defined('B_PROLOG_INCLUDED') && B_PROLOG_INCLUDED === true) || die();

use spaceonfire\BitrixTools\Components\BaseComponent;

class PwdSectionsNav extends BaseComponent
{
    /**
     * @var array
     */
    public $sections = [];

    /**
     * получает разделы
     */
    private function getSections(): void
    {
        $filter = [
            'ACTIVE' => 'Y',
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
            'ELEMENT_SUBSECTIONS' => 'N',
            'CNT_ACTIVE' => 'Y',
            '!CODE' => false,
        ];

        if ($this->arParams['SECTION_ID']) {
            $filter['ID'] = $this->arParams['SECTION_ID'];
        }

        $sections = \CIBlockSection::GetList(
            [
                'DEPTH_LEVEL' => 'ASC',
                'SORT' => 'ASC',
                'NAME' => 'ASC',
            ],
            $filter,
            true,
            ['ID', 'NAME', 'UF_ENG_NAME', 'CODE', 'ELEMENT_CNT']
        );

        while ($section = $sections->GetNext()) {
            if ($section['ELEMENT_CNT'] <= 0) {
                continue;
            }
            $this->sections[] = $section;
        }
    }

    /**
     * логика компонента
     */
    protected function executeMain(): void
    {
        $this->getSections();
    }
}