<?php
/**
 * Default TinyMCE language file
 *
 * @package tinymce
 * @subpackage lexicon
 *
 * @language sv
 * MODX Revolution TinyMCE package translated to Swedish by Joakim Nyman (edgefive, joakim@edgefive.com)
 */
 include_once(dirname(dirname(__FILE__)).'/en/default.inc.php'); // fallback for missing defaults or new additions

$_lang['tiny.toggle_editor'] = 'Slå på/av editor: ';

$_lang['setting_tiny.base_url'] = 'TinyMCE Dokument Bas URL';
$_lang['setting_tiny.base_url_desc'] = 'Tillåter inställning av en bas URL egenskap för att åsidosätta document_base_url TinyMCE inställningar. Användbart för rotrelativa miljöer.';
$_lang['setting_tiny.convert_fonts_to_spans'] = 'Konvertera Font till Span';
$_lang['setting_tiny.convert_fonts_to_spans_desc'] = 'Om du anger detta alternativ till true, kommer TinyMCE konvertera alla font element till span element och skapa span element i stället för font element. Detta alternativ bör användas för att få mer W3C kompatibel kod, eftersom font elementen är föråldrade.';
$_lang['setting_tiny.convert_newlines_to_brs'] = 'Konvertera radbrytning till BR element';
$_lang['setting_tiny.convert_newlines_to_brs_desc'] = 'Om du sätter detta alternativ till true kommer nyradstecken koder konverteras till br element. Detta alternativ är satt till false som standard.';
$_lang['setting_tiny.css_selectors'] = 'CSS selektorer';
$_lang['setting_tiny.css_selectors_desc'] = 'Här kan du ange en lista med selektorer som skall vara tillgängliga i editorn. Skriv in dem på följande sätt:<br />"visningsNamn=selektorNamn;visningsNamn2=selektorNamn2"<br />Till exempel säg att du har <b>.mono</b> och <b>.smallText</b> selektorer i din CSS-fil, då kunde du lägga till dem här som:<br />"Monospace text=mono;Liten text=smallText"<br />Observera att sista posten inte ska ha ett semikolon efter sig.';
$_lang['setting_tiny.custom_buttons1'] = 'Anpassade knappar Rad 1';
$_lang['setting_tiny.custom_buttons1_desc'] = 'Ange knapparna att använda som en kommateckens separerad lista för första raden. Se till att varje knapp har det nödvändiga pluginet aktiverat i "Anpassade Plugins" inställningen.';
$_lang['setting_tiny.custom_buttons2'] = 'Anpassade knappar Rad 2';
$_lang['setting_tiny.custom_buttons2_desc'] = 'Ange knapparna att använda som en kommateckens separerad lista för andra raden. Se till att varje knapp har det nödvändiga pluginet aktiverat i "Anpassade Plugins" inställningen.';
$_lang['setting_tiny.custom_buttons3'] = 'Anpassade knappar Rad 3';
$_lang['setting_tiny.custom_buttons3_desc'] = 'Ange knapparna att använda som en kommateckens separerad lista för tredje raden. Se till att varje knapp har det nödvändiga pluginet aktiverat i "Anpassade Plugins" inställningen.';
$_lang['setting_tiny.custom_buttons4'] = 'Anpassade knappar Rad 4';
$_lang['setting_tiny.custom_buttons4_desc'] = 'Ange knapparna att använda som en kommateckens separerad lista för fjärde raden. Se till att varje knapp har det nödvändiga pluginet aktiverat i "Anpassade Plugins" inställningen.';
$_lang['setting_tiny.custom_buttons5'] = 'Anpassade knappar Rad 5';
$_lang['setting_tiny.custom_buttons5_desc'] = 'Ange knapparna att använda som en kommateckens separerad lista för femte raden. Se till att varje knapp har det nödvändiga pluginet aktiverat i "Anpassade Plugins" inställningen.';
$_lang['setting_tiny.custom_plugins'] = 'Anpassade Plugins';
$_lang['setting_tiny.custom_plugins_desc'] = 'En kommateckens-separerad lista med TinyMCE plugins att använda.';
$_lang['setting_tiny.editor_theme'] = 'Editor Tema';
$_lang['setting_tiny.element_format'] = 'Element Format';
$_lang['setting_tiny.element_format_desc'] = 'Det här alternativet ger kontroll om element bör vara i HTML eller XHTML-läge. xhtml är standard läget för detta alternativ. Detta innebär att till exempel <br /> blir <br> om du ställer in detta alternativ på "html".';
$_lang['setting_tiny.entity_encoding'] = 'Entity Encoding';
$_lang['setting_tiny.entity_encoding_desc'] = 'Det här alternativet styr hur enheter / tecken behandlas av TinyMCE. Tillgängliga värden är "namngivna", "numeriska" och "rå".';
$_lang['setting_tiny.fix_nesting'] = 'Auto-korrigera inkapsling';
$_lang['setting_tiny.fix_nesting_desc'] = 'Det här alternativet styr om ogiltigt innehåll bör korrigeras före insättning i IE. IE har en bugg som producerade ett ogiltigt DOM träd om det inmatade innehållet inte är korrekt så detta alternativ försöker fixa detta genom förbehandling av HTML strängen. Det här alternativet är inaktiverat som standard eftersom det kan vara lite långsamt.';
$_lang['setting_tiny.fix_table_elements'] = 'Auto-korrigera tabell element';
$_lang['setting_tiny.fix_table_elements_desc'] = 'Det här alternativet låter dig ange att tabellelement borde flyttas utanför stycken eller andra block element . Om du aktiverar det här alternativet kommer block element att delas i två delar när en tabell hittas i den. Det här alternativet är inaktiverat som standard.';
$_lang['setting_tiny.font_size_classes'] = 'Teckenstorleks klasser';
$_lang['setting_tiny.font_size_classes_desc'] = 'Det här alternativet tillåter specifikationen av en kommaseparerad lista av klass namn som ska användas när användaren väljer teckenstorlekar. Det här alternativet används endast när convert_fonts_to_spans alternativet är aktiverat. Denna förteckning över klasser bör vara 7 objekt. Det här alternativet används inte som standard, men kan vara användbart om du vill ha egna klasser för varje teckenstorlek för webbläsarkompatibilitet.';
$_lang['setting_tiny.font_size_style_values'] = 'Teckenstorleks stilvärden';
$_lang['setting_tiny.font_size_style_values_desc'] = 'Det här alternativet tillåter specifikationen av en kommaseparerad lista med stil värden som ska användas när användaren väljer teckenstorlekar. Det här alternativet används endast när convert_fonts_to_spans alternativet är aktiverat. Denna förteckning över stil värden bör vara 7 objekt. Det här alternativet används inte som standard, men kan vara användbart om du vill ha anpassade CSS värden för varje teckenstorlek för webbläsarkompatibilitet. Standard är: xx-small, x-small, small, medium, large, x-large, xx-large.';
$_lang['setting_tiny.forced_root_block'] = 'Tvingade rot block';
$_lang['setting_tiny.forced_root_block_desc'] = 'Det här alternativet ger dig möjlighet att se till att alla icke block element eller text noder är inslagna i block element. Till exempel <strong>något</strong> kommer att matas ut som: <p><strong>något</strong></p>.';
$_lang['setting_tiny.indentation'] = 'Indrag';
$_lang['setting_tiny.indentation_desc'] = 'Detta alternativ möjliggör specificering av indragsnivån för öka/minska indrag knapparna i användargränssnittet. Detta är som standard 30px, men kan vara valfritt värde.';
$_lang['setting_tiny.invalid_elements'] = 'Ogiltiga element';
$_lang['setting_tiny.invalid_elements_desc'] = 'Detta alternativ bör innehålla en kommaseparerad lista med elementnamn att utesluta från innehållet. Element i den här listan kommer att tas bort när TinyMCE utför en sanering.';
$_lang['setting_tiny.nowrap'] = 'Förhindra editor inslutning';
$_lang['setting_tiny.nowrap_desc'] = 'Det här nowrap alternativet låter dig kontrollera hur mellanrum ska brytas av i editorn. Detta alternativ är satt till false som standard, men om du aktiverar det genom att ställa den till true kommer innehållet i editorn aldrig att brytas av.';
$_lang['setting_tiny.object_resizing'] = 'Objekt storleksändring';
$_lang['setting_tiny.object_resizing_desc'] = 'Detta alternativ ger dig möjlighet att slå på/stänga av inline storleksändrings kontrollerna på tabeller och bilder i Firefox/Mozilla. Dessa är aktiverade som standard.';
$_lang['setting_tiny.remove_linebreaks'] = 'Radera radbrytningar';
$_lang['setting_tiny.remove_linebreaks_desc'] = 'Det här alternativet styr huruvida radbrytnings tecken skall avlägsnas från utskriven HTML.';
$_lang['setting_tiny.remove_redundant_brs'] = 'Radera överflödiga BR element';
$_lang['setting_tiny.remove_redundant_brs_desc'] = 'Detta alternativ är aktiverat som standard och kommer att styra utskriften av efterföljande BR element i slutet av block element. Eftersom IE inte kan rita dessa på rätt sätt måste vi ta bort dem som standard för att säkerställa korrekt utskrift i alla webbläsare. Så för vissa webbläsare är det här BR elementet i slutet av LI element i exemplet nedan överflödigt.';
$_lang['setting_tiny.removeformat_selector'] = 'Avlägsna formaterings selektorer';
$_lang['setting_tiny.removeformat_selector_desc'] = 'Detta alternativ gör det möjligt att specificera vilka element som ska tas bort när du trycker på Radera formatering knappen. Detta är ett CSS-selektor mönster.';
$_lang['setting_tiny.path_options'] = 'Sökvägs alternativ';
$_lang['setting_tiny.path_options_desc'] = 'Antingen "rootrelative", "docrelative", eller "fullpathurl".';
$_lang['setting_tiny.table_inline_editing'] = 'Tabell Inline Redigering';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Detta alternativ ger dig möjlighet att slå på/stänga av inline tabell redigerar kontroller i Firefox/Mozilla. Enligt TinyMCE dokumentationen är dessa kontroller något buggiga och inte omdesignbara, så de är inaktiverade som standard.';
$_lang['setting_tiny.template_list'] = 'Mall lista';
$_lang['setting_tiny.template_list_desc'] = 'Ange en lista över mallar för mall pluginet. De måste vara kommaseparerade, och sedan ha formatet namn:URL:beskrivning. Till exempel, MyTemp:assets/templates/mytemp.html:Min egen mall';
$_lang['setting_tiny.template_list_snippet'] = 'Mall listnings snippet';
$_lang['setting_tiny.template_list_snippet_desc'] = 'Ange namnet på en snippet som kommer att generera en lista med mallar kompatibla med tiny.template_list formatet (namn:URL: beskrivning). Om en snippet namnges, kommer resultaten som returneras av snippet anropet användas i stället för ett värde som finns i tiny.template_list';
$_lang['setting_tiny.template_selected_content_classes'] = 'Mallvalda innehållsklasser';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Ange en lista med CSS-klass namn för mall pluginet. De måste separeras med mellanslag. Varje mall element med en av de specificerade CSS-klasserna kommer att ha sitt innehåll ersätt med den valda editorns innehåll när den först infogas.';
$_lang['setting_tiny.theme_advanced_blockformats'] = 'HTML block element';
$_lang['setting_tiny.theme_advanced_blockformats_desc'] = 'Detta alternativ bör innehålla en kommaseparerad lista med format som kommer att finnas tillgängliga i formaterings rullgardinslistan. Det här alternativet är endast tillgängligt om det avancerade temat används.';
$_lang['setting_tiny.theme_advanced_font_sizes'] = 'Avancerade temats teckensnittsstorlekar';
$_lang['setting_tiny.theme_advanced_font_sizes_desc'] = 'Detta alternativ bör innehålla en kommaseparerad lista över teckenstorlekar som ska inkluderas. Varje post i listan måste vara ett giltigt värde för font-style CSS egendomen (10px, 12pt, 1em, etc.). Exempel: Stor text=30px,Liten text=small,Min text storlek=.mytextsize.';

$_lang['setting_tiny.skin'] = 'TinyMCE skal';
$_lang['setting_tiny.skin_desc'] = 'Det här alternativet låter dig ange vilket skal du vill använda med ditt tema. Ett skal är i grunden en CSS-fil som får laddas från skins katalogen inne i temat. Den avancerade temat som TinyMCE levereras med har två skal, dessa kallas "default" och "o2k7". Vi har lagt till ett annat skal som heter "cirkuit" som är valt som standard.';
$_lang['setting_tiny.skin_variant'] = 'TinyMCE skal variant';
$_lang['setting_tiny.skin_variant_desc'] = 'Det här alternativet ger dig möjligheten att ange en variant av skalet, till exempel "silver" eller "svart". "default" skalet innehar ingen variant, medans "o2k7" standard erbjuder "silver" eller "black" varianter av den förvalda. För "cirkuit" skalet finns det en variant som heter "silver". När du skapar ett skal, kan ytterligare varianter också skapas genom att lägga ui_[variant_namn].css filer tillsammans med standard ui.css.';
$_lang['setting_tiny.object_resizing'] = 'Objekt storleksändring';
$_lang['setting_tiny.object_resizing_desc'] = 'Detta alternativ ger dig möjlighet att slå på/stänga av inline storleksändrings kontrollerna på tabeller och bilder i Firefox/Mozilla. Dessa är aktiverade som standard.';
$_lang['setting_tiny.table_inline_editing'] = 'Tabell inline redigering';
$_lang['setting_tiny.table_inline_editing_desc'] = 'Detta alternativ ger dig möjlighet att slå på/stänga av inline tabell redigerar kontroller i Firefox/Mozilla. Enligt TinyMCE dokumentationen är dessa kontroller något buggiga och inte omdesignbara, så de är inaktiverade som standard.';
$_lang['setting_tiny.template_selected_content_classes'] = 'Mallvalda innehållsklasser';
$_lang['setting_tiny.template_selected_content_classes_desc'] = 'Ange en lista med CSS-klass namn för mall pluginet. De måste separeras med mellanslag. Varje mall element med en av de specificerade CSS-klasserna kommer att ha sitt innehåll ersätt med den valda editorns innehåll när den först infogas.';

$_lang['area_advanced-theme'] = 'Avancerat Tema';
$_lang['area_cleanup-output'] = 'Rengör/Utskrift';
$_lang['area_custom-buttons'] = 'Anpassade knappar';
$_lang['area_general'] = 'Allmän';
$_lang['area_url'] = 'URL';
$_lang['area_callbacks'] = 'Återanrop';
$_lang['area_layout'] = 'Layout';