# sis-hanball-sdk
unofficial sdk for sis-handball.de xml api <http://www.sis-handball.de/xmlexport/>

## What does QuerySIS do?

QuerySIS obtains the results of the league and teams associated with **SIS Handball**.

To use it must be registered.

The system **only** provides information about the registered partnership.

### Process for Admin:

The type of Query you need is prevailed.

Once we have the queries designed, we can insert them into the articles as new elements of the pages.

A json file must be created with the configuration data. 

MoThe location of the file must be in **/ProjectContao/system/modules/querysis/classes/config.json**

There is a file in the same location called **config_EXAMPLE.json** to use as an example.


## Use in Backend

Insert element (QuerySIS) into an article.
- Create article.
- Add element (QuerSIS).
- Select the options (Team and list type).
- and Save.


---


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
                    'querySIS_List_Spiel' => '{type_legend},type,querysisTeam;{include_legend},querysis;',
                    ...
        ),

#### Inside the array **files** the following line must be added:

        // Fields
                'fields' => array
                (
                    ...
                    'querysisTeam' => array 
                    (
                                'label'                   => &$GLOBALS['TL_LANG']['tl_content']['idQuerySelect'],
                                'exclude'                 => true,
                                'inputType'               => 'select',
                                'foreignKey'              => 'tl_qsis_verein.name', 
                                'relation'                => array('type'=>'belongsTo', 'load'=>'eager'),
                                'eval'                    => array('mandatory'=>true, 'chosen'=>true, 'submitOnChange'=>true),
                                'sql'                     => "int(10) unsigned NOT NULL default '0'"
                    ),


                    'querysis' => array 
                    (
                                'label'                   => &$GLOBALS['TL_LANG']['tl_content']['idQuerySelect'],
                                'exclude'                 => true,
                                'inputType'               => 'radio',
                                'options'                 => array('Tabelle', 'Next', 'All'),
                                'sql'                     => "varchar(20) NOT NULL default ''"
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


---

## Assets

In the module directory within assets. Find information to upload the data with the 
Männer Ost League teams as well as the Ost League data. Also the logos to be able to update.

### Database:
**League Data**: assets/sql/tl_qsis_liga.sql
**Teams Data**: assets/sql/tl_qsis_verien.sql

**Logos teams Liga Männer Ost**: assets/images/logosVereinLigaMeannerOST

### Process to upload information:
- Update the BBDD with the files **tl_qsis_liga.sql** and **tl_qsis_verien.sql**
- Upload the image files (logos) using the Contao file manager.

Then you have to update the records of each computer with the new location of images.