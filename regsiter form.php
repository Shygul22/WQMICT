<?php
echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "    <meta charset=\"UTF-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "    <title>Register Form</title>\n";
echo "    <link rel=\"stylesheet\" href=\"style.css\">\n";
echo "</head>\n";
echo "<body>\n";
echo "    <div class=\"container\">\n";
echo "        <form action=\"action_page.php\">\n";
echo "            <h2>Water Quality Monitoring In the Corporation Tank </h2>\n";
echo "            <h2> Register Form </h2>\n";
echo "          <div class=\"row\">\n";
echo "            <div class=\"col-25\">\n";
echo "              <label for=\"fname\">NAME</label>\n";
echo "            </div>\n";
echo "            <div class=\"col-75\">\n";
echo "              <input type=\"text\" id=\"fname\" name=\"name\" placeholder=\"Your name..\">\n";
echo "            </div>\n";
echo "          </div>\n";
echo "          <div class=\"row\">\n";
echo "            <div class=\"col-25\">\n";
echo "              <label for=\"Number\">MOBILE NUMBER</label>\n";
echo "            </div>\n";
echo "            <div class=\"col-75\">\n";
echo "              <input type=\"tel\" id=\"Number\" name=\"lastname\" placeholder=\"Your Mobile Number..\">\n";
echo "            </div>\n";
echo "          </div>\n";
echo "          <div class=\"row\">\n";
echo "            <div class=\"col-25\">\n";
echo "              <label for=\"chpg\">CHOOSE YOU PIVLIC OR GOVERNMENT</label>\n";
echo "            </div>\n";
echo "            <div class=\"col-75\">\n";
echo "              <select id=\"chpg\" name=\"chpg\">\n";
echo "                <option value=\"public\">Public</option>\n";
echo "                <option value=\"goverment officer\">Goverment Officer</option>\n";
echo "              </select>\n";
echo "            </div>\n";
echo "          </div>\n";
echo "          \n";
echo "          <div class=\"row\">\n";
echo "            <input type=\"submit\" value=\"sumbit\">\n";
echo "           </div>\n";
echo "        </form>\n";
echo "      </div>\n";
echo "      <style>\n";
echo "        *{\n";
echo "    margin: 0;\n";
echo "    box-sizing: border-box;\n";
echo "}\n";
echo "h2{\n";
echo "    text-align: center;\n";
echo "}\n";
echo ".form_data{\n";
echo "    width: 50%;\n";
echo "    padding: 25px;\n";
echo "    margin: 25px;\n";
echo "    background-color:#023047;\n";
echo "    /* background-image: linear-gradient(to right, #0061ff , #60efff); */\n";
echo "    border-radius: 10px;\n";
echo "    text-align: center;\n";
echo "    justify-content: center;\n";
echo "    color: #03ffd5;\n";
echo "    \n";
echo "}\n";
echo "input[type=text], select{\n";
echo "    width: 100%;\n";
echo "    padding: 12px;\n";
echo "    border: 1px solid #ccc;\n";
echo "    border-radius: 4px;\n";
echo "    box-sizing: border-box;\n";
echo "    resize: vertical;\n";
echo "  }\n";
echo "  \n";
echo "input[type=tel]{\n";
echo "    width: 100%;\n";
echo "    padding: 12px;\n";
echo "    border: 1px solid #ccc;\n";
echo "    border-radius: 4px;\n";
echo "    box-sizing: border-box;\n";
echo "    resize: vertical;\n";
echo "}\n";
echo "  label {\n";
echo "    padding: 12px 12px 12px 0;\n";
echo "    display: inline-block;\n";
echo "    font-weight: bold;\n";
echo "  }\n";
echo "  input[type=submit] {\n";
echo "    background-color: #04AA6D;\n";
echo "    color: white;\n";
echo "    padding: 12px 20px;\n";
echo "    border: none;\n";
echo "    border-radius: 4px;\n";
echo "    cursor: pointer;\n";
echo "    float: right;\n";
echo "  }\n";
echo "  \n";
echo "  .container {\n";
echo "    border-radius: 10px;\n";
echo "    background-color: #023047;\n";
echo "    padding: 20px;\n";
echo "    margin: 10px;\n";
echo "    color: #ffb703;\n";
echo "  }\n";
echo "  \n";
echo " \n";
echo "  .col-25 {\n";
echo "    float: left;\n";
echo "    width: 25%;\n";
echo "    margin-top: 16px;\n";
echo "    padding: 15px;\n";
echo "  }\n";
echo "  \n";
echo "  .col-75 {\n";
echo "    float: left;\n";
echo "    width: 75%;\n";
echo "    margin-top: 16px;\n";
echo "    padding: 15px;\n";
echo "  }\n";
echo "  \n";
echo "  .row:after {\n";
echo "    content: \"\";\n";
echo "    display: table;\n";
echo "    clear: both;\n";
echo "  }\n";
echo "  h2{\n";
echo "    margin: 10px;\n";
echo "    padding: 10px;\n";
echo "    font-weight: bolder;\n";
echo "    color: #03ffd5;\n";
echo "  }\n";
echo "  @media screen and (max-width: 600px) {\n";
echo "    .col-25, .col-75, input[type=submit] {\n";
echo "      width: 100%;\n";
echo "      margin-top: 0;\n";
echo "    }\n";
echo "  }\n";
echo "      </style>\n";
echo "</body>\n";
echo "</html>\n";