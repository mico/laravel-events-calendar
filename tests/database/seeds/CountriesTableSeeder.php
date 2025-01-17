<?php

namespace DavideCasiraghi\LaravelEventsCalendar\Tests;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Seeders
|--------------------------------------------------------------------------
|
| Seders are used to generate datas to populate the database of the test environment.
|
*/

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
          ['id' => '1', 'name' => 'Italy', 'continent_id' => '6', 'code' => 'IT'],
          ['id' => '2', 'name' => 'United States', 'continent_id' => '3', 'code' => 'US'],
          ['id' => '3', 'name' => 'Algeria', 'continent_id' => '1', 'code' => 'DZ'],
          ['id' => '4', 'name' => 'Wallis and Futuna', 'continent_id' => '4', 'code' => 'WF'],
          ['id' => '5', 'name' => 'Angola', 'continent_id' => '1', 'code' => 'AO'],
          ['id' => '6', 'name' => 'Benin', 'continent_id' => '1', 'code' => 'BJ'],
          ['id' => '7', 'name' => 'Botswana', 'continent_id' => '1', 'code' => 'BW'],
          ['id' => '8', 'name' => 'Burkina Faso', 'continent_id' => '1', 'code' => 'BF'],
          ['id' => '9', 'name' => 'Burundi', 'continent_id' => '1', 'code' => 'BI'],
          ['id' => '10', 'name' => 'Cameroon', 'continent_id' => '1', 'code' => 'CM'],
          ['id' => '11', 'name' => 'Cape Verde', 'continent_id' => '1', 'code' => 'CV'],
          ['id' => '12', 'name' => 'Central African Republic', 'continent_id' => '1', 'code' => 'CF'],
          ['id' => '13', 'name' => 'Chad', 'continent_id' => '1', 'code' => 'TD'],
          ['id' => '14', 'name' => 'Comoros', 'continent_id' => '1', 'code' => 'KM'],
          ['id' => '15', 'name' => 'Congo - Brazzaville', 'continent_id' => '1', 'code' => 'CG'],
          ['id' => '16', 'name' => 'Congo - Kinshasa', 'continent_id' => '1', 'code' => 'CD'],
          ['id' => '17', 'name' => 'Cote d\'Ivoire', 'continent_id' => '1', 'code' => 'CI'],
          ['id' => '18', 'name' => 'Djibouti', 'continent_id' => '1', 'code' => 'DJ'],
          ['id' => '19', 'name' => 'Egypt', 'continent_id' => '1', 'code' => 'EG'],
          ['id' => '20', 'name' => 'Equatorial Guinea', 'continent_id' => '1', 'code' => 'GQ'],
          ['id' => '21', 'name' => 'Eritrea', 'continent_id' => '1', 'code' => 'ER'],
          ['id' => '22', 'name' => 'Ethiopia', 'continent_id' => '1', 'code' => 'ET'],
          ['id' => '23', 'name' => 'Gabon', 'continent_id' => '1', 'code' => 'GA'],
          ['id' => '24', 'name' => 'Gambia', 'continent_id' => '1', 'code' => 'GM'],
          ['id' => '25', 'name' => 'Ghana', 'continent_id' => '1', 'code' => 'GH'],
          ['id' => '26', 'name' => 'Guinea', 'continent_id' => '1', 'code' => 'GN'],
          ['id' => '27', 'name' => 'Guinea Bissau', 'continent_id' => '1', 'code' => 'GW'],
          ['id' => '28', 'name' => 'Kenya', 'continent_id' => '1', 'code' => 'KE'],
          ['id' => '29', 'name' => 'Lesotho', 'continent_id' => '1', 'code' => 'LS'],
          ['id' => '30', 'name' => 'Liberia', 'continent_id' => '1', 'code' => 'LR'],
          ['id' => '31', 'name' => 'Libya', 'continent_id' => '1', 'code' => 'LY'],
          ['id' => '32', 'name' => 'Madagascar', 'continent_id' => '1', 'code' => 'MG'],
          ['id' => '33', 'name' => 'Malawi', 'continent_id' => '1', 'code' => 'MW'],
          ['id' => '34', 'name' => 'Mali', 'continent_id' => '1', 'code' => 'ML'],
          ['id' => '35', 'name' => 'Mauritania', 'continent_id' => '1', 'code' => 'MR'],
          ['id' => '36', 'name' => 'Mauritius', 'continent_id' => '1', 'code' => 'MU'],
          ['id' => '37', 'name' => 'Mayotte', 'continent_id' => '1', 'code' => 'YT'],
          ['id' => '38', 'name' => 'Morocco', 'continent_id' => '1', 'code' => 'MA'],
          ['id' => '39', 'name' => 'Mozambique', 'continent_id' => '1', 'code' => 'MZ'],
          ['id' => '40', 'name' => 'Namibia', 'continent_id' => '1', 'code' => 'NA'],
          ['id' => '41', 'name' => 'Niger', 'continent_id' => '1', 'code' => 'NE'],
          ['id' => '42', 'name' => 'Vanuatu', 'continent_id' => '4', 'code' => 'VU'],
          ['id' => '43', 'name' => 'Rwanda', 'continent_id' => '1', 'code' => 'RW'],
          ['id' => '44', 'name' => 'Reunion', 'continent_id' => '1', 'code' => 'RE'],
          ['id' => '45', 'name' => 'Saint Helena', 'continent_id' => '1', 'code' => 'SH'],
          ['id' => '46', 'name' => 'Senegal', 'continent_id' => '1', 'code' => 'SN'],
          ['id' => '47', 'name' => 'Seychelles', 'continent_id' => '1', 'code' => 'SC'],
          ['id' => '48', 'name' => 'Sierra Leone', 'continent_id' => '1', 'code' => 'SL'],
          ['id' => '49', 'name' => 'Somalia', 'continent_id' => '1', 'code' => 'SO'],
          ['id' => '50', 'name' => 'South Africa', 'continent_id' => '1', 'code' => 'ZA'],
          ['id' => '51', 'name' => 'Sudan', 'continent_id' => '1', 'code' => 'SD'],
          ['id' => '52', 'name' => 'Swaziland', 'continent_id' => '1', 'code' => 'SZ'],
          ['id' => '53', 'name' => 'Sao Tome and Príncipe', 'continent_id' => '1', 'code' => 'ST'],
          ['id' => '54', 'name' => 'Tanzania', 'continent_id' => '1', 'code' => 'TZ'],
          ['id' => '55', 'name' => 'Togo', 'continent_id' => '1', 'code' => 'TG'],
          ['id' => '56', 'name' => 'Tunisia', 'continent_id' => '1', 'code' => 'TN'],
          ['id' => '57', 'name' => 'Uganda', 'continent_id' => '1', 'code' => 'UG'],
          ['id' => '58', 'name' => 'U.S. Minor Outlying Islands', 'continent_id' => '4', 'code' => 'UM'],
          ['id' => '59', 'name' => 'Tuvalu', 'continent_id' => '4', 'code' => 'TV'],
          ['id' => '60', 'name' => 'Western Sahara', 'continent_id' => '1', 'code' => 'EH'],
          ['id' => '61', 'name' => 'Zambia', 'continent_id' => '1', 'code' => 'ZM'],
          ['id' => '62', 'name' => 'Zimbabwe', 'continent_id' => '1', 'code' => 'ZW'],
          ['id' => '63', 'name' => 'Anguilla', 'continent_id' => '3', 'code' => 'AI'],
          ['id' => '64', 'name' => 'Antigua and Barbuda', 'continent_id' => '3', 'code' => 'AG'],
          ['id' => '65', 'name' => 'Argentina', 'continent_id' => '7', 'code' => 'AR'],
          ['id' => '66', 'name' => 'Aruba', 'continent_id' => '7', 'code' => 'AW'],
          ['id' => '67', 'name' => 'Bahamas', 'continent_id' => '3', 'code' => 'BS'],
          ['id' => '68', 'name' => 'Barbados', 'continent_id' => '7', 'code' => 'BB'],
          ['id' => '69', 'name' => 'Belize', 'continent_id' => '3', 'code' => 'BZ'],
          ['id' => '70', 'name' => 'Bermuda', 'continent_id' => '3', 'code' => 'BM'],
          ['id' => '71', 'name' => 'Bolivia', 'continent_id' => '7', 'code' => 'BO'],
          ['id' => '72', 'name' => 'Brazil', 'continent_id' => '7', 'code' => 'BR'],
          ['id' => '73', 'name' => 'British Virgin Islands', 'continent_id' => '3', 'code' => 'VG'],
          ['id' => '74', 'name' => 'Canada', 'continent_id' => '3', 'code' => 'CA'],
          ['id' => '75', 'name' => 'Cayman Islands', 'continent_id' => '3', 'code' => 'KY'],
          ['id' => '76', 'name' => 'Chile', 'continent_id' => '7', 'code' => 'CL'],
          ['id' => '77', 'name' => 'Colombia', 'continent_id' => '7', 'code' => 'CO'],
          ['id' => '78', 'name' => 'Costa Rica', 'continent_id' => '3', 'code' => 'CR'],
          ['id' => '79', 'name' => 'Cuba', 'continent_id' => '3', 'code' => 'CU'],
          ['id' => '80', 'name' => 'Dominica', 'continent_id' => '3', 'code' => 'DM'],
          ['id' => '81', 'name' => 'Dominican Republic', 'continent_id' => '3', 'code' => 'DO'],
          ['id' => '82', 'name' => 'Ecuador', 'continent_id' => '7', 'code' => 'EC'],
          ['id' => '83', 'name' => 'El Salvador', 'continent_id' => '3', 'code' => 'SV'],
          ['id' => '84', 'name' => 'Falkland Islands', 'continent_id' => '7', 'code' => 'FK'],
          ['id' => '85', 'name' => 'French Guiana', 'continent_id' => '7', 'code' => 'GF'],
          ['id' => '86', 'name' => 'Greenland', 'continent_id' => '3', 'code' => 'GL'],
          ['id' => '87', 'name' => 'Grenada', 'continent_id' => '3', 'code' => 'GD'],
          ['id' => '88', 'name' => 'Guadeloupe', 'continent_id' => '3', 'code' => 'GP'],
          ['id' => '89', 'name' => 'Guatemala', 'continent_id' => '3', 'code' => 'GT'],
          ['id' => '90', 'name' => 'Guyana', 'continent_id' => '7', 'code' => 'GY'],
          ['id' => '91', 'name' => 'Haiti', 'continent_id' => '3', 'code' => 'HT'],
          ['id' => '92', 'name' => 'Honduras', 'continent_id' => '3', 'code' => 'HN'],
          ['id' => '93', 'name' => 'Jamaica', 'continent_id' => '3', 'code' => 'JM'],
          ['id' => '94', 'name' => 'Martinique', 'continent_id' => '3', 'code' => 'MQ'],
          ['id' => '95', 'name' => 'Mexico', 'continent_id' => '7', 'code' => 'MX'],
          ['id' => '96', 'name' => 'Montserrat', 'continent_id' => '3', 'code' => 'MS'],
          ['id' => '97', 'name' => 'Netherlands Antilles', 'continent_id' => '7', 'code' => 'AN'],
          ['id' => '98', 'name' => 'Nicaragua', 'continent_id' => '3', 'code' => 'NI'],
          ['id' => '99', 'name' => 'Panama', 'continent_id' => '3', 'code' => 'PA'],
          ['id' => '100', 'name' => 'Paraguay', 'continent_id' => '7', 'code' => 'PY'],
          ['id' => '101', 'name' => 'Peru', 'continent_id' => '7', 'code' => 'PE'],
          ['id' => '102', 'name' => 'Puerto Rico', 'continent_id' => '3', 'code' => 'PR'],
          ['id' => '103', 'name' => 'Saint Barthelemy', 'continent_id' => '3', 'code' => 'BL'],
          ['id' => '104', 'name' => 'Saint Kitts and Nevis', 'continent_id' => '3', 'code' => 'KL'],
          ['id' => '105', 'name' => 'Saint Lucia', 'continent_id' => '3', 'code' => 'LC'],
          ['id' => '106', 'name' => 'Saint Martin', 'continent_id' => '3', 'code' => 'MF'],
          ['id' => '107', 'name' => 'Saint Pierre and Miquelon', 'continent_id' => '3', 'code' => 'PM'],
          ['id' => '108', 'name' => 'Saint Vincent and the Grenadines', 'continent_id' => '3', 'code' => 'VC'],
          ['id' => '109', 'name' => 'Suriname', 'continent_id' => '7', 'code' => 'SR'],
          ['id' => '110', 'name' => 'Trinidad and Tobago', 'continent_id' => '7', 'code' => 'TT'],
          ['id' => '111', 'name' => 'Turks and Caicos Islands', 'continent_id' => '3', 'code' => 'TC'],
          ['id' => '112', 'name' => 'U.S. Virgin Islands', 'continent_id' => '3', 'code' => 'VI'],
          ['id' => '113', 'name' => 'Tonga', 'continent_id' => '4', 'code' => 'TO'],
          ['id' => '114', 'name' => 'Uruguay', 'continent_id' => '7', 'code' => 'UY'],
          ['id' => '115', 'name' => 'Venezuela', 'continent_id' => '7', 'code' => 'VE'],
          ['id' => '116', 'name' => 'Tokelau', 'continent_id' => '4', 'code' => 'TK'],
          ['id' => '117', 'name' => 'Afghanistan', 'continent_id' => '5', 'code' => 'AF'],
          ['id' => '118', 'name' => 'Armenia', 'continent_id' => '5', 'code' => 'AM'],
          ['id' => '119', 'name' => 'Azerbaijan', 'continent_id' => '5', 'code' => 'AZ'],
          ['id' => '120', 'name' => 'Bahrain', 'continent_id' => '5', 'code' => 'BH'],
          ['id' => '121', 'name' => 'Bangladesh', 'continent_id' => '5', 'code' => 'BD'],
          ['id' => '122', 'name' => 'Bhutan', 'continent_id' => '5', 'code' => 'BT'],
          ['id' => '123', 'name' => 'Brunei', 'continent_id' => '5', 'code' => 'BN'],
          ['id' => '124', 'name' => 'Cambodia', 'continent_id' => '5', 'code' => 'KH'],
          ['id' => '125', 'name' => 'China', 'continent_id' => '5', 'code' => 'CN'],
          ['id' => '126', 'name' => 'Cyprus', 'continent_id' => '5', 'code' => 'CY'],
          ['id' => '127', 'name' => 'Georgia', 'continent_id' => '5', 'code' => 'GE'],
          ['id' => '129', 'name' => 'Hong Kong SAR China', 'continent_id' => '5', 'code' => 'HK'],
          ['id' => '130', 'name' => 'India', 'continent_id' => '5', 'code' => 'IN'],
          ['id' => '131', 'name' => 'Indonesia', 'continent_id' => '5', 'code' => 'ID'],
          ['id' => '132', 'name' => 'Iran', 'continent_id' => '5', 'code' => 'IR'],
          ['id' => '133', 'name' => 'Iraq', 'continent_id' => '5', 'code' => 'IQ'],
          ['id' => '134', 'name' => 'Israel', 'continent_id' => '5', 'code' => 'IL'],
          ['id' => '135', 'name' => 'Japan', 'continent_id' => '5', 'code' => 'JP'],
          ['id' => '136', 'name' => 'Jordan', 'continent_id' => '5', 'code' => 'JO'],
          ['id' => '137', 'name' => 'Kazakhstan', 'continent_id' => '5', 'code' => 'KZ'],
          ['id' => '138', 'name' => 'Kuwait', 'continent_id' => '5', 'code' => 'KW'],
          ['id' => '139', 'name' => 'Kyrgyzstan', 'continent_id' => '5', 'code' => 'KG'],
          ['id' => '140', 'name' => 'Laos', 'continent_id' => '5', 'code' => 'LA'],
          ['id' => '141', 'name' => 'Lebanon', 'continent_id' => '5', 'code' => 'LB'],
          ['id' => '142', 'name' => 'Macau SAR China', 'continent_id' => '5', 'code' => 'MO'],
          ['id' => '143', 'name' => 'Malaysia', 'continent_id' => '5', 'code' => 'MY'],
          ['id' => '144', 'name' => 'Maldives', 'continent_id' => '5', 'code' => 'MV'],
          ['id' => '145', 'name' => 'Mongolia', 'continent_id' => '5', 'code' => 'MN'],
          ['id' => '146', 'name' => 'Myanmar Burma', 'continent_id' => '5', 'code' => 'MM'],
          ['id' => '147', 'name' => 'Nepal', 'continent_id' => '5', 'code' => 'NP'],
          ['id' => '148', 'name' => 'Neutral Zone', 'continent_id' => '5', 'code' => 'NT'],
          ['id' => '149', 'name' => 'North Korea', 'continent_id' => '5', 'code' => 'KP'],
          ['id' => '150', 'name' => 'Oman', 'continent_id' => '5', 'code' => 'OM'],
          ['id' => '151', 'name' => 'Pakistan', 'continent_id' => '5', 'code' => 'PK'],
          ['id' => '152', 'name' => 'Palestinian Territories', 'continent_id' => '5', 'code' => 'PS'],
          ['id' => '153', 'name' => 'People s Democratic Republic of Yemen', 'continent_id' => '5', 'code' => 'YD'],
          ['id' => '154', 'name' => 'Philippines', 'continent_id' => '5', 'code' => 'PH'],
          ['id' => '155', 'name' => 'Qatar', 'continent_id' => '5', 'code' => 'QA'],
          ['id' => '156', 'name' => 'Saudi Arabia', 'continent_id' => '5', 'code' => 'SA'],
          ['id' => '157', 'name' => 'Singapore', 'continent_id' => '5', 'code' => 'SG'],
          ['id' => '158', 'name' => 'South Korea', 'continent_id' => '5', 'code' => 'KR'],
          ['id' => '159', 'name' => 'Sri Lanka', 'continent_id' => '5', 'code' => 'LK'],
          ['id' => '160', 'name' => 'Syria', 'continent_id' => '5', 'code' => 'SY'],
          ['id' => '161', 'name' => 'Taiwan', 'continent_id' => '5', 'code' => 'TW'],
          ['id' => '162', 'name' => 'Tajikistan', 'continent_id' => '5', 'code' => 'TJ'],
          ['id' => '163', 'name' => 'Thailand', 'continent_id' => '5', 'code' => 'TH'],
          ['id' => '164', 'name' => 'Timor Leste', 'continent_id' => '5', 'code' => 'TL'],
          ['id' => '165', 'name' => 'Turkey', 'continent_id' => '5', 'code' => 'TR'],
          ['id' => '166', 'name' => 'Turkmenistan', 'continent_id' => '5', 'code' => 'TM'],
          ['id' => '167', 'name' => 'United Arab Emirates', 'continent_id' => '5', 'code' => 'AE'],
          ['id' => '168', 'name' => 'Uzbekistan', 'continent_id' => '5', 'code' => 'UZ'],
          ['id' => '169', 'name' => 'Vietnam', 'continent_id' => '5', 'code' => 'VN'],
          ['id' => '170', 'name' => 'Yemen', 'continent_id' => '5', 'code' => 'YE'],
          ['id' => '171', 'name' => 'Albania', 'continent_id' => '6', 'code' => 'AL'],
          ['id' => '172', 'name' => 'Andorra', 'continent_id' => '6', 'code' => 'AD'],
          ['id' => '173', 'name' => 'Austria', 'continent_id' => '6', 'code' => 'AT'],
          ['id' => '174', 'name' => 'Belarus', 'continent_id' => '6', 'code' => 'BY'],
          ['id' => '175', 'name' => 'Belgium', 'continent_id' => '6', 'code' => 'BE'],
          ['id' => '176', 'name' => 'Bosnia and Herzegovina', 'continent_id' => '6', 'code' => 'BA'],
          ['id' => '177', 'name' => 'Bulgaria', 'continent_id' => '6', 'code' => 'BG'],
          ['id' => '178', 'name' => 'Croatia', 'continent_id' => '6', 'code' => 'HR'],
          ['id' => '179', 'name' => 'South Georgia and the South Sandwich Isl', 'continent_id' => '4', 'code' => 'GS'],
          ['id' => '180', 'name' => 'Czech Republic', 'continent_id' => '6', 'code' => 'CZ'],
          ['id' => '181', 'name' => 'Denmark', 'continent_id' => '6', 'code' => 'DK'],
          ['id' => '182', 'name' => 'Estonia', 'continent_id' => '6', 'code' => 'EE'],
          ['id' => '183', 'name' => 'Faroe Islands', 'continent_id' => '6', 'code' => 'FO'],
          ['id' => '184', 'name' => 'Finland', 'continent_id' => '6', 'code' => 'FI'],
          ['id' => '185', 'name' => 'France', 'continent_id' => '6', 'code' => 'FR'],
          ['id' => '186', 'name' => 'Germany', 'continent_id' => '6', 'code' => 'DE'],
          ['id' => '187', 'name' => 'Gibraltar', 'continent_id' => '6', 'code' => 'GI'],
          ['id' => '188', 'name' => 'Greece', 'continent_id' => '6', 'code' => 'GR'],
          ['id' => '189', 'name' => 'Guernsey', 'continent_id' => '6', 'code' => 'GG'],
          ['id' => '190', 'name' => 'Hungary', 'continent_id' => '6', 'code' => 'HU'],
          ['id' => '191', 'name' => 'Iceland', 'continent_id' => '6', 'code' => 'IS'],
          ['id' => '192', 'name' => 'Ireland', 'continent_id' => '6', 'code' => 'IE'],
          ['id' => '193', 'name' => 'Isle of Man', 'continent_id' => '6', 'code' => 'IM'],
          ['id' => '195', 'name' => 'Jersey', 'continent_id' => '6', 'code' => 'JE'],
          ['id' => '196', 'name' => 'Latvia', 'continent_id' => '6', 'code' => 'LV'],
          ['id' => '197', 'name' => 'Liechtenstein', 'continent_id' => '6', 'code' => 'LI'],
          ['id' => '198', 'name' => 'Lithuania', 'continent_id' => '6', 'code' => 'LT'],
          ['id' => '199', 'name' => 'Luxembourg', 'continent_id' => '6', 'code' => 'LU'],
          ['id' => '200', 'name' => 'Macedonia', 'continent_id' => '6', 'code' => 'MK'],
          ['id' => '201', 'name' => 'Malta', 'continent_id' => '6', 'code' => 'MT'],
          ['id' => '202', 'name' => 'Metropolitan France', 'continent_id' => '6', 'code' => 'FX'],
          ['id' => '203', 'name' => 'Moldova', 'continent_id' => '6', 'code' => 'MD'],
          ['id' => '204', 'name' => 'Monaco', 'continent_id' => '6', 'code' => 'MC'],
          ['id' => '205', 'name' => 'Montenegro', 'continent_id' => '6', 'code' => 'ME'],
          ['id' => '206', 'name' => 'Netherlands', 'continent_id' => '6', 'code' => 'NL'],
          ['id' => '207', 'name' => 'Norway', 'continent_id' => '6', 'code' => 'NO'],
          ['id' => '208', 'name' => 'Poland', 'continent_id' => '6', 'code' => 'PL'],
          ['id' => '209', 'name' => 'Portugal', 'continent_id' => '6', 'code' => 'PT'],
          ['id' => '210', 'name' => 'Romania', 'continent_id' => '6', 'code' => 'RO'],
          ['id' => '211', 'name' => 'Russia', 'continent_id' => '6', 'code' => 'RU'],
          ['id' => '212', 'name' => 'San Marino', 'continent_id' => '6', 'code' => 'SM'],
          ['id' => '213', 'name' => 'Serbia', 'continent_id' => '6', 'code' => 'RS'],
          ['id' => '214', 'name' => 'Serbia and Montenegro', 'continent_id' => '6', 'code' => 'CS'],
          ['id' => '215', 'name' => 'Slovakia', 'continent_id' => '6', 'code' => 'SK'],
          ['id' => '216', 'name' => 'Slovenia', 'continent_id' => '6', 'code' => 'SI'],
          ['id' => '217', 'name' => 'Spain', 'continent_id' => '6', 'code' => 'ES'],
          ['id' => '218', 'name' => 'Svalbard and Jan Mayen', 'continent_id' => '6', 'code' => 'SJ'],
          ['id' => '219', 'name' => 'Sweden', 'continent_id' => '6', 'code' => 'SE'],
          ['id' => '220', 'name' => 'Switzerland', 'continent_id' => '6', 'code' => 'CH'],
          ['id' => '221', 'name' => 'Ukraine', 'continent_id' => '6', 'code' => 'UA'],
          ['id' => '222', 'name' => 'Union of Soviet Socialist Republics', 'continent_id' => '6', 'code' => 'SU'],
          ['id' => '223', 'name' => 'United Kingdom', 'continent_id' => '6', 'code' => 'GB'],
          ['id' => '224', 'name' => 'Vatican City', 'continent_id' => '6', 'code' => 'VA'],
          ['id' => '225', 'name' => 'Aland Islands', 'continent_id' => '6', 'code' => 'AX'],
          ['id' => '226', 'name' => 'American Samoa', 'continent_id' => '4', 'code' => 'AS'],
          ['id' => '227', 'name' => 'Antarctica', 'continent_id' => '4', 'code' => 'AQ'],
          ['id' => '228', 'name' => 'Australia', 'continent_id' => '4', 'code' => 'AU'],
          ['id' => '229', 'name' => 'Bouvet Island', 'continent_id' => '4', 'code' => 'BV'],
          ['id' => '230', 'name' => 'British Indian Ocean Territory', 'continent_id' => '4', 'code' => 'IO'],
          ['id' => '231', 'name' => 'Christmas Island', 'continent_id' => '4', 'code' => 'CX'],
          ['id' => '232', 'name' => 'Cocos Keeling Islands', 'continent_id' => '4', 'code' => 'CC'],
          ['id' => '234', 'name' => 'Cook Islands', 'continent_id' => '4', 'code' => 'CK'],
          ['id' => '235', 'name' => 'Fiji', 'continent_id' => '4', 'code' => 'FJ'],
          ['id' => '236', 'name' => 'French Polynesia', 'continent_id' => '4', 'code' => 'PF'],
          ['id' => '237', 'name' => 'French Southern Territories', 'continent_id' => '4', 'code' => 'TF'],
          ['id' => '238', 'name' => 'Guam', 'continent_id' => '4', 'code' => 'GU'],
          ['id' => '239', 'name' => 'Heard Island and McDonald Islands', 'continent_id' => '4', 'code' => 'HM'],
          ['id' => '240', 'name' => 'Kiribati', 'continent_id' => '4', 'code' => 'KI'],
          ['id' => '241', 'name' => 'Marshall Islands', 'continent_id' => '4', 'code' => 'MH'],
          ['id' => '242', 'name' => 'Micronesia', 'continent_id' => '4', 'code' => 'FM'],
          ['id' => '243', 'name' => 'Nauru', 'continent_id' => '4', 'code' => 'NR'],
          ['id' => '244', 'name' => 'New Caledonia', 'continent_id' => '4', 'code' => 'NC'],
          ['id' => '245', 'name' => 'New Zealand', 'continent_id' => '4', 'code' => 'NZ'],
          ['id' => '246', 'name' => 'Niue', 'continent_id' => '4', 'code' => 'NU'],
          ['id' => '247', 'name' => 'Norfolk Island', 'continent_id' => '4', 'code' => 'NF'],
          ['id' => '248', 'name' => 'Northern Mariana Islands', 'continent_id' => '4', 'code' => 'MP'],
          ['id' => '249', 'name' => 'Palau', 'continent_id' => '4', 'code' => 'PW'],
          ['id' => '250', 'name' => 'Papua New Guinea', 'continent_id' => '4', 'code' => 'PG'],
          ['id' => '251', 'name' => 'Pitcairn Islands', 'continent_id' => '4', 'code' => 'PN'],
          ['id' => '252', 'name' => 'Samoa', 'continent_id' => '4', 'code' => 'WS'],
          ['id' => '253', 'name' => 'Solomon Islands', 'continent_id' => '4', 'code' => 'SB'],
        ];

        //dump($countries);
        foreach ($countries as $key => $country) {
            DB::table('countries')->insert([
                'id' => $country['id'],
                'name' => $country['name'],
                'continent_id' => $country['continent_id'],
                'code' => $country['code'],
            ]);
        }
    }
}
