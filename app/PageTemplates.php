<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function home()
    {
        $fields = [
            [   // CustomHTML
                'name' => 'metas_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
            ],
            [
                'name' => 'meta_title',
                'label' => trans('backpack::pagemanager.meta_title'),
                'fake' => true,
            ],
            [
                'name' => 'meta_description',
                'label' => trans('backpack::pagemanager.meta_description'),
                'fake' => true,
            ],
            [
                'name' => 'meta_keywords',
                'type' => 'textarea',
                'label' => trans('backpack::pagemanager.meta_keywords'),
                'fake' => true,
            ],
            [   // CustomHTML
                'name' => 'content_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
            ],
            [
                'name' => 'h1',
                'label' => "H1",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'subtitle',
                'label' => "Subtitle",
                'type' => 'textarea',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'callback_number',
                'label' => "Callback Number",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2',
                'label' => "H2",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_subtext',
                'label' => "H2 Subtext",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'h4',
                'label' => "H4",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd',
                'label' => "H2 2nd",
                'type' => 'text',
                'fake' => true,
            ],
            [ // Table
                'name' => 'features',
                'label' => 'Features',
                'type' => 'table',
                'entity_singular' => 'feature', // used on the "Add X" button
                'columns' => [
                    'title' => 'Title',
                    'desc' => 'Description',
                ],
                'max' => 4, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
            [
                'name' => 'text_1',
                'label' => "Text 1",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'h2_3rd',
                'label' => "H2 3rd",
                'type' => 'text',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image_2nd',
                'label' => 'Image 2nd',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'description',
                'label' => 'Description',
                'type' => 'wysiwyg',
                'fake' => true,
            ],
        ];

        $this->crud->addFields($fields);
    }

    private function agenturen()
    {
        $fields = [
            [   // CustomHTML
                'name' => 'metas_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
            ],
            [
                'name' => 'meta_title',
                'label' => trans('backpack::pagemanager.meta_title'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_description',
                'label' => trans('backpack::pagemanager.meta_description'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_keywords',
                'type' => 'textarea',
                'label' => trans('backpack::pagemanager.meta_keywords'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [   // CustomHTML
                'name' => 'content_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
            ],
            [
                'name' => 'h2',
                'label' => "H2",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_subtext',
                'label' => "H2 Subtext",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'agent_text',
                'label' => "Agent Text",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd',
                'label' => "H2 2nd",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd_subtext',
                'label' => "H2 2nd Subtext",
                'type' => 'textarea',
                'fake' => true,
            ],
            [ // Table
                'name' => 'prices',
                'label' => 'Prices',
                'type' => 'table',
                'entity_singular' => 'price', // used on the "Add X" button
                'columns' => [
                    'title' => 'Title',
                    'from' => 'From',
                    'price' => 'Price',
                    'desc' => 'Description',
                ],
                'max' => 2, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
            [
                'name' => 'small_text',
                'label' => "small Text",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_3rd',
                'label' => "H2 3rd",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_3rd_subtext',
                'label' => "H2 3rd Subtext",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'agent_text_last',
                'label' => "Agent Text Last",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_4th',
                'label' => "H2 4th",
                'type' => 'text',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
                'fake' => true,
            ]
        ];

        $this->crud->addFields($fields);
    }

    private function outsourcing()
    {
        $fields = [
            [   // CustomHTML
                'name' => 'metas_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
            ],
            [
                'name' => 'meta_title',
                'label' => trans('backpack::pagemanager.meta_title'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_description',
                'label' => trans('backpack::pagemanager.meta_description'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_keywords',
                'type' => 'textarea',
                'label' => trans('backpack::pagemanager.meta_keywords'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [   // CustomHTML
                'name' => 'content_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
            ],
            [
                'name' => 'thumbnail',
                'label' => 'Thumbnail',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'thumbnail_small_text',
                'label' => 'Thumbnail Small Text',
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'thumbnail_text',
                'label' => 'Thumbnail Text',
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h1',
                'label' => "H1",
                'type' => 'text',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'proj_text',
                'label' => "Project Text",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'h2',
                'label' => "H2",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_subtext',
                'label' => "H2 Subtext",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd',
                'label' => "H2 2nd",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd_subtext',
                'label' => "H2 2nd Subtext",
                'type' => 'textarea',
                'fake' => true,
            ],
            [ // Table
                'name' => 'prices',
                'label' => 'Prices',
                'type' => 'table',
                'entity_singular' => 'price', // used on the "Add X" button
                'columns' => [
                    'title' => 'Title',
                    'from' => 'From',
                    'price' => 'Price',
                    'desc' => 'Description',
                ],
                'max' => 2, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
            [
                'name' => 'small_text',
                'label' => "Small Text",
                'type' => 'textarea',
                'fake' => true,
            ],

            [
                'name' => 'h2_3rd',
                'label' => "H2 3rd",
                'type' => 'text',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image_2nd',
                'label' => 'Image 2nd',
                'type' => 'browse',
                'fake' => true,
            ],
            [ // Table
                'name' => 'text_list',
                'label' => 'Text List',
                'type' => 'table',
                'entity_singular' => 'row', // used on the "Add X" button
                'columns' => [
                    'text' => 'Text',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
            [
                'name' => 'h2_4th',
                'label' => "H2 4th",
                'type' => 'text',
                'fake' => true,
            ],
            [ // Table
                'name' => 'text_list_2nd',
                'label' => 'Text List 2nd',
                'type' => 'table',
                'entity_singular' => 'row', // used on the "Add X" button
                'columns' => [
                    'title' => 'Title',
                    'text' => 'Text',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
                    ];

        $this->crud->addFields($fields);
    }

    private function outstaffing()
    {
        $fields = [
            [   // CustomHTML
                'name' => 'metas_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
            ],
            [
                'name' => 'meta_title',
                'label' => trans('backpack::pagemanager.meta_title'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_description',
                'label' => trans('backpack::pagemanager.meta_description'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_keywords',
                'type' => 'textarea',
                'label' => trans('backpack::pagemanager.meta_keywords'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [   // CustomHTML
                'name' => 'content_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
            ],

            [
                'name' => 'thumbnail',
                'label' => 'Thumbnail',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'thumbnail_small_text',
                'label' => 'Thumbnail Small Text',
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'thumbnail_text',
                'label' => 'Thumbnail Text',
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h1',
                'label' => "H1",
                'type' => 'text',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'proj_text',
                'label' => "Project Text",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'h2',
                'label' => "H2",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_subtext',
                'label' => "H2 Subtext",
                'type' => 'text',
                'fake' => true,
            ],
            [ // Table
                'name' => 'prices',
                'label' => 'Prices',
                'type' => 'table',
                'entity_singular' => 'price', // used on the "Add X" button
                'columns' => [
                    'title' => 'Title',
                    'from' => 'From',
                    'price' => 'Price',
                    'desc' => 'Description',
                ],
                'max' => 2, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
            [
                'name' => 'small_text',
                'label' => "Small Text",
                'type' => 'textarea',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd',
                'label' => "H2 2nd",
                'type' => 'text',
                'fake' => true,
            ],
            [   // Browse
                'name' => 'image_2nd',
                'label' => 'Image 2nd',
                'type' => 'browse',
                'fake' => true,
            ],
            [ // Table
                'name' => 'text_list',
                'label' => 'Text List',
                'type' => 'table',
                'entity_singular' => 'row', // used on the "Add X" button
                'columns' => [
                    'text' => 'Text',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
            [
                'name' => 'h2_3rd',
                'label' => "H2 3rd",
                'type' => 'text',
                'fake' => true,
            ],
            [ // Table
                'name' => 'text_list_2nd',
                'label' => 'Text List 2nd',
                'type' => 'table',
                'entity_singular' => 'row', // used on the "Add X" button
                'columns' => [
                    'title' => 'Title',
                    'text' => 'Text',
                ],
                'max' => 5, // maximum rows allowed in the table
                'min' => 0, // minimum rows allowed in the table
                'fake' => true,
            ],
        ];

        $this->crud->addFields($fields);
    }

    private function about_us()
    {
        $fields = [
            [   // CustomHTML
                'name' => 'metas_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
            ],
            [
                'name' => 'meta_title',
                'label' => trans('backpack::pagemanager.meta_title'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_description',
                'label' => trans('backpack::pagemanager.meta_description'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_keywords',
                'type' => 'textarea',
                'label' => trans('backpack::pagemanager.meta_keywords'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [   // CustomHTML
                'name' => 'content_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
            ],
            [
                'name' => 'h1',
                'label' => "H1",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'thumbnail',
                'label' => 'Thumbnail',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'thumbnail_text',
                'label' => 'Thumbnail Text',
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2',
                'label' => "H2",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'h2_subtext',
                'label' => "H2 Subtext",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'image',
                'label' => 'Image',
                'type' => 'browse',
                'fake' => true,
            ],
            [
                'name' => 'image_desc',
                'label' => "Image Description",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'text',
                'label' => "Text",
                'type' => 'wysiwyg',
                'fake' => true,
            ],
            [
                'name' => 'h2_2nd',
                'label' => 'H2 2nd',
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'text_2',
                'label' => "Text 2",
                'type' => 'wysiwyg',
                'fake' => true,
            ],
        ];

        $this->crud->addFields($fields);
    }

    private function contacts()
    {
        $fields = [
            [   // CustomHTML
                'name' => 'metas_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.metas').'</h2><hr>',
            ],
            [
                'name' => 'meta_title',
                'label' => trans('backpack::pagemanager.meta_title'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_description',
                'label' => trans('backpack::pagemanager.meta_description'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [
                'name' => 'meta_keywords',
                'type' => 'textarea',
                'label' => trans('backpack::pagemanager.meta_keywords'),
                'fake' => true,
                'store_in' => 'extras',
            ],
            [   // CustomHTML
                'name' => 'content_separator',
                'type' => 'custom_html',
                'value' => '<br><h2>'.trans('backpack::pagemanager.content').'</h2><hr>',
            ],
            [
                'name' => 'h1',
                'label' => "H1",
                'type' => 'text',
                'fake' => true,
            ],
            [
                'name' => 'content',
                'label' => "Content",
                'type' => 'summernote',
                'fake' => true,
            ],
        ];

        $this->crud->addFields($fields);
    }

}
