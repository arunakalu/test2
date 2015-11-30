<?php
/*
 *  FINDMYFARE.COM - Team Innovation 
 *  ---------------------------------
 */
?>

<div class="deal_widget clearfix hidden-xs" style="min-height:100px !important; height:186px; margin-top: 30px;"> 
    <div class="title_2"><a href=""></a></div><div class="sub_title_2"></div>

    <div class="deal_content">



        <?php
        $xmlpath='xml';
        if(isset($_GET["chk"]) && $_GET["chk"]=='preview'){
            $xmlpath='xml-preview';
        }
        
        $footer_tabs = load_xml_file(ROOT_PATH."/cms/$xmlpath/footer_tab.xml");

        $sameTT = "";
        $count5 = 1;
        $count_row = 0;


        $output = "<div class=\"footer_tab_wrapper\">";
        $output2 = "<div class=\"tab_container_footer\">";
        $output .= "<ul class=\"tabs_footer footer_tab_style\" style=\" margin-top: -40px !important; \">";

        for ($k = 0; $k < sizeof($footer_tabs->footerTab_links_item); $k++) {

            $title = (string) $footer_tabs->footerTab_links_item[$k]->title;
            $icon = (string) $footer_tabs->footerTab_links_item[$k]->image;
            $nameF = (string)$footer_tabs->footerTab_links_item[$k]->name;
            $linkF = (string) $footer_tabs->footerTab_links_item[$k]->link;


            if ($sameTT != $title || $sameTT == "") {
                if ($sameTT != "") {
                    $output2 .= "</div>";
                }
            }


            if ($sameTT != $title || $sameTT == "") {

                if ($k != (sizeof($footer_tabs) - 1)) {
                    $output2 .= "<div id=\"tab" . $count5 . "_footer\" class=\"tab_content_footer\">";
                    $output2 .= "<h4>" . $title . "</h4>";
                }
                ///console.log(title);

                $output .= "  <li rel=\"tab" . $count5 . "_footer\"> <i class=\"fa fa-" . $icon . " \"></i></li>";
                $count5++;
            }


            if ($count_row == 0) {
                $output2 .= "<div class=\"col-sm-3\">";
            }

            $output2 .= "<div><a href=" . $linkF . ">" . $nameF . "</a></div>";

            if ($count_row == 3) {
                $output2 .= "</div>";
            }

            $count_row++;
            if ($count_row == 4) {
                $count_row = 0;
            }

            $sameTT = $title;
        }

        $output .= "</ul>";
        $output .= "</div>";
        $output = "<div class=\"footer_tab\">" . $output . $output2 . " </div>";


        echo $output
        ?>

    </div>
</div>