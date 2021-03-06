<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/28/16
 * Time: 3:36 PM
 */

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fullname', TextType::class, array(
                'required'=>false,
            ))
            ->add('username', EmailType::class, array(
                'required'=>false,

            ))
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'Male',
                    'Female' => 'Female'
                ),

                'empty_data'  => null,
                'placeholder'=>'Select gender',
                'required'=>false,
            ))
            ->add('cellphone', TextType::class, array(
                'required'=>false,
            ))
            ->add('ccode', ChoiceType::class, array(
                'choices' => array(
                    'United States +1'=>'1',
                    'Turkey +90'=>'90',
                    'Afghanistan +93'=>'93',
                    'Albania +355'=>'355',
                    'Algeria +213'=>'213',
                    'Andorra +376'=>'376',
                    'Angola +244'=>'244',
                    'Antarctica +672'=>'672',
                    'Armenia +374'=>'374',
                    'Aruba +297'=>'297',
                    'Australia +61'=>'61',
                    'Austria +43'=>'43',
                    'Azerbaijan +944'=>'994',
                    'Bahrain +973'=>'973',
                    'Bangladesh +880'=>'880',
                    'Belarus +375'=>'375',
                    'Belgium +32'=>'32',
                    'Belize +501'=>'501',
                    'Benin +229'=>'229',
                    'Bhutan +975'=>'975',
                    'Bolivia +591'=>'591',
                    'Bosnia and Herzegovina +387'=>'387',
                    'Botswana +267'=>'267',
                    'Brazil +55'=>'55',
                    'British Indian Ocean Territory +246'=>'246',
                    'Brunei +673'=>'673',
                    'Bulgaria +359'=>'359',
                    'Burkina Faso +226'=>'226',
                    'Burundi +257'=>'257',
                    'Cambodia +885'=>'855',
                    'Cameroon +237'=>'237',
                    'Canada +1'=>'1',
                    'Cape Verde +238'=>'238',
                    'Central African Republic +236'=>'236',
                    'Chad +235'=>'235',
                    'Chile +56'=>'56',
                    'China +86'=>'86',
                    'Christmas Island +61'=>'61',
                    'Cocos Islands +61'=>'61',
                    'Colombia +57'=>'57',
                    'Comoros +269'=>'269',
                    'Cook Islands +682'=>'682',
                    'Costa Rica +506'=>'506',
                    'Croatia +385'=>'385',
                    'Cuba +53'=>'53',
                    'Curacao +599'=>'599',
                    'Cyprus +357'=>'357',
                    'Czech Republic +420'=>'420',
                    'Democratic Republic of the Congo +243'=>'243',
                    'Denmark +45'=>'45',
                    'Djibouti +253'=>'253',
                    'East Timor +670'=>'670',
                    'Ecuador +593'=>'593',
                    'Egypt +20'=>'20',
                    'El Salvador +503'=>'503',
                    'Equatorial Guinea +240'=>'240',
                    'Eritrea +291'=>'291',
                    'Estonia +372'=>'372',
                    'Ethiopia +251'=>'251',
                    'Falkland Islands +500'=>'500',
                    'Faroe Islands +298'=>'298',
                    'Fiji +679'=>'679',
                    'Finland +358'=>'358',
                    'France +33'=>'33',
                    'French Polynesia +689'=>'689',
                    'Gabon +241'=>'241',
                    'Gambia +220'=>'220',
                    'Georgia +995'=>'995',
                    'Germany +49'=>'49',
                    'Ghana +233'=>'233',
                    'Gibraltar +350'=>'350',
                    'Greece +30'=>'30',
                    'Greenland +299'=>'299',
                    'Guatemala +502'=>'502',
                    'Guinea +224'=>'224',
                    'Guinea-Bissau +245'=>'245',
                    'Guyana +592'=>'592',
                    'Haiti +509'=>'509',
                    'Honduras +504'=>'504',
                    'Hong Kong +852'=>'852',
                    'Hungary +36'=>'36',
                    'Iceland +354'=>'354',
                    'India +91'=>'91',
                    'Indonesia +62'=>'62',
                    'Iran +98'=>'98',
                    'Iraq +964'=>'964',
                    'Ireland +353'=>'353',
                    'Israel +972'=>'972',
                    'Italy +39'=>'39',
                    'Ivory Coast +225'=>'225',
                    'Japan +81'=>'81',
                    'Jordan +962'=>'962',
                    'Kazakhstan +7'=>'7',
                    'Kenya +254'=>'254',
                    'Kiribati +686'=>'686',
                    'Kosovo +383'=>'383',
                    'Kuwait +965'=>'965',
                    'Kyrgyzstan +996'=>'996',
                    'Laos +856'=>'856',
                    'Latvia +371'=>'371',
                    'Lebanon +961'=>'961',
                    'Lesotho +226'=>'266',
                    'Liberia +231'=>'231',
                    'Libya +218'=>'218',
                    'Liechtenstein +423'=>'423',
                    'Lithuania +370'=>'370',
                    'Luxembourg +352'=>'352',
                    'Macau +853'=>'853',
                    'Macedonia +389'=>'389',
                    'Madagascar +261'=>'261',
                    'Malawi +265'=>'265',
                    'Malaysia +60'=>'60',
                    'Maldives +960'=>'960',
                    'Mali +223'=>'223',
                    'Malta +356'=>'356',
                    'Marshall Islands +692'=>'692',
                    'Mauritania +222'=>'222',
                    'Mauritius +230'=>'230',
                    'Mayotte +262'=>'262',
                    'Mexico +52'=>'52',
                    'Micronesia +691'=>'691',
                    'Moldova +373'=>'373',
                    'Monaco +377'=>'377',
                    'Mongolia +976'=>'976',
                    'Montenegro +382'=>'382',
                    'Morocco +212'=>'212',
                    'Mozambique +258'=>'258',
                    'Myanmar +95'=>'95',
                    'Namibia +264'=>'264',
                    'Nauru +674'=>'674',
                    'Nepal +977'=>'977',
                    'Netherlands +31'=>'31',
                    'Netherlands Antilles +599'=>'599',
                    'New Caledonia +687'=>'687',
                    'New Zealand +64'=>'64',
                    'Nicaragua +505'=>'505',
                    'Niger +227'=>'227',
                    'Nigeria +234'=>'234',
                    'Niue +683'=>'683',
                    'North Korea +850'=>'850',
                    'Norway +47'=>'47',
                    'Oman +968'=>'968',
                    'Pakistan +92'=>'92',
                    'Palau +680'=>'680',
                    'Palestine +970'=>'970',
                    'Panama +507'=>'507',
                    'Papua New Guinea +675'=>'675',
                    'Paraguay +595'=>'595',
                    'Peru +51'=>'51',
                    'Philippines +63'=>'63',
                    'Pitcairn +64'=>'64',
                    'Poland +48'=>'48',
                    'Portugal +351'=>'351',
                    'Qatar +974'=>'974',
                    'Republic of the Congo +242'=>'242',
                    'Reunion +262'=>'262',
                    'Romania +40'=>'40',
                    'Russia +7'=>'7',
                    'Rwanda +250'=>'250',
                    'Saint Barthelemy +590'=>'590',
                    'Saint Helena +290'=>'290',
                    'Saint Martin +590'=>'590',
                    'Saint Pierre and Miquelon +508'=>'508',
                    'Samoa +685'=>'685',
                    'San Marino +378'=>'378',
                    'Sao Tome and Principe +239'=>'239',
                    'Saudi Arabia +966'=>'966',
                    'Senegal +221'=>'221',
                    'Serbia +381'=>'381',
                    'Seychelles +248'=>'248',
                    'Sierra Leone +232'=>'232',
                    'Singapore +65'=>'65',
                    'Slovakia +421'=>'421',
                    'Slovenia +386'=>'386',
                    'Solomon Islands +677'=>'677',
                    'Somalia +252'=>'252',
                    'South Africa +27'=>'27',
                    'South Korea +82'=>'82',
                    'South Sudan +211'=>'211',
                    'Spain +34'=>'34',
                    'Sri Lanka +94'=>'94',
                    'Sudan +249'=>'249',
                    'Suriname +597'=>'597',
                    'Svalbard and Jan Mayen +47'=>'47',
                    'Swaziland +268'=>'268',
                    'Sweden +46'=>'46',
                    'Switzerland +41'=>'41',
                    'Syria +963'=>'963',
                    'Taiwan +886'=>'886',
                    'Tajikistan +992'=>'992',
                    'Tanzania +255'=>'255',
                    'Thailand +66'=>'66',
                    'Togo +228'=>'228',
                    'Tokelau +690'=>'690',
                    'Tonga +676'=>'676',
                    'Tunisia +216'=>'216',
                    'Turkmenistan +993'=>'993',
                    'Tuvalu +688'=>'688',
                    'Uganda +256'=>'256',
                    'Ukraine +380'=>'380',
                    'United Arab Emirates +971'=>'971',
                    'United Kingdom +44'=>'44',
                    'Uruguay +598'=>'598',
                    'Uzbekistan +998'=>'998',
                    'Vanuatu +678'=>'678',
                    'Vatican +379'=>'379',
                    'Venezuela +58'=>'58',
                    'Vietnam +84'=>'84',
                    'Wallis and Futuna +681'=>'681',
                    'Western Sahara +212'=>'212',
                    'Yemen +967'=>'967',
                    'Zambia +260'=>'260',
                    'Zimbabwe +263'=>'263',
                ),
                'empty_data'  => null,
                'placeholder'=>'Country Code',
                'required'=>true,
            ))
            ->add('birthday', BirthdayType::class, array(
                'widget'=>'single_text',
                'format'=>'MM/dd/yyyy',
                'required'=>false,

            ))
            ->add('newpassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'required'=>false,
                    'mapped'=>false,
                    'first_options'  => array('label' => 'Password', 'error_bubbling' => true),
                    'second_options' => array('label' => 'Repeat Password'),
                    'invalid_message' => 'The password fields must match.',
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User',
            'validation_groups' => array('edit'),
        ));
    }



}