## WordPress OOCSS

Starter child theme implementing Stubbornella's [OOCSS framework](https://github.com/stubbornella/oocss) with Automattic's [Toolbox](http://wordpress.org/extend/themes/toolbox).

Toolbox's original CSS can be found in plugins/wpoocss/wpoocss.css. Create your own plugins using the following file structure:

    \-yourplugin/ {plugin-root}  
    +-yourplugin.css {essential CSS}  
    +-yourplugin_debug.css {CSS for debugging} 
    +-yourplugin_doc.html {Examples and Explanation}  
    +-yourplugin_skins.css {all skins that only require pure css, others via @import}  
    +-\ skins/ {skins that need more than pure CSS, eg. images}  
      +-\ photo/ {skin-root}  
        +-photo_skin.css  
        +-img/  
      +-\ flow/ {skin-root}  
        +-flow_skin.css  
        +-img/
