# sis-hanball-sdk
unofficial sdk for sis-handball.de xml api <http://www.sis-handball.de/xmlexport/>

## Use in Backend

### Process for Admin:
The type of Query you need is prevailed.

Once we have the queries designed, we can insert them into the articles as new elements of the pages.

Insert element (QuerySIS) into an article.
- Create article.
- Add element.
- Select element in the list in the "querySIS" section.
- Then select the desired Query.


## Installation of the QuerySIS Module in Contao

#### Copy files:
Inside in **/System/modules**

Create a directory called **querySIS** and copy within the files.

The appearance should be as follows:


	|--ProjectCantao
        |--system
            |--modules
                |--querySIS
                    |--assets
                    |--classes
                    |--config
                    |--dca
                    |--languages
                    |--models
                    |--modules
                    |--templates
                    |--README.md                   
                   

### File Modification

It is necessary to modify some files of the **core** of **Contao**.

These modifications serve to be able to dynamically select the querys within the articles, as elements. 


#### File Modification autoload.php

It is necessary to modify some files of the core of Contao.

These modifications serve to be able to dynamically select the querys within the articles, as elements.

Modify the file **/ProjectContao/system/modules/core/config/autoload.php**

We have to register the models.

Inside ... **classLoader :: addClasses (array (....**

        /**
         * Register the classes
         */
        ClassLoader::addClasses(array
        (
                ...

                // Models
                'Contao\QsisQueryModel'  => 'system/modules/querySIS/models/QsisQueryModel.php',
                'Contao\QsisQueryModel'  => 'system/modules/querySIS/models/QsisQueryModel.php',
                'Contao\QsisQueryModel'  => 'system/modules/querySIS/models/QsisQueryModel.php',

                ...

#### File Modification tl_content.php


The table and the form of the contents must be modified.

We need to modify the file: **/ProjectContao/system/modules/core/dca/tl_content.php**

#### Inside the array **palettes** the following line must be added:


        // Palettes
                'palettes' => array
                (
                    ...
                    'querySIS_List_Spiel' => '{type_legend},type;{include_legend},querysis;',
                    ...
        ),

#### Inside the array **files** the following line must be added:

        // Fields
                'fields' => array
                (
                    ...
                    'querysis' => array 
                    (
                                'label'                   => &$GLOBALS['TL_LANG']['tl_content']['idQuerySelect'],
                                'exclude'                 => true,
                                'inputType'               => 'select',            
                                'inputType'               => 'radio',
                                'options'                 => array('Tabelle', 'Next', 'All'),
                                'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true),
                                'sql'                     => "int(10) unsigned NOT NULL default '0'"
                    ),
                    ...

#### Modify the translation file **/ProjectContao/system/modules/core/languages/XX/tl_content.xlf**

In order for the Backend forms to have a translation, the following translations must be applied in the different translation files.


        <trans-unit id="tl_content.idQuerySelect.0">
          <source>Select Query.</source>
          <target>Your translation</target>
        </trans-unit>
        <trans-unit id="tl_content.idQuerySelect.1">
          <source>This will be the query that will come out in this element</source>
          <target>Your translation</target>
        </trans-unit>