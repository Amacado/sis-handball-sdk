# sis-hanball-sdk
unofficial sdk for sis-handball.de xml api <http://www.sis-handball.de/xmlexport/>

## Use in Backend

###Process for Admin:
The type of Query you need is prevailed.

Once we have the queries designed, we can insert them into the articles as new elements of the pages.

Insert element (QuerySIS) into an article.
- Create article.
- Add element.
- Select element in the list in the "querySIS" section.
- Then select the desired Query.

###Installation of the QuerySIS Module in Account

####Copy files:
Inside in /System/modules
Create a directory called querySIS and copy within the files.

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