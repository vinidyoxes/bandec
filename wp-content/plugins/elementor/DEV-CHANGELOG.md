# Elementor Developer Edition - by Elementor.com

#### 3.9.0-dev4 - 2022-10-27
* Tweak: Remove duplicate queries on admin page [ED-8346] (#20098)
* Fix: Container Full Width values are disappearing after latest version update [ED-8468] (#20111)
* Fix: Responsive controls with responsive conditions don't always apply in the front end [ED-8471] (#20112)
* Tweak: Make responsive all instances for border radius (#19896)
* Fix: Transitions functionality is not working as expected in Container (#19913) [ED-8387] (#20127)
* Fix: Build action not working [ED-8492] (#20128)
* Fix: Progress Bar layout is breaking when the direction is set to row in a container [ED-8167] (#20126)
* Fix: Broken site layout on plugin upgrade [ED-8202] (#19974)
* Revert "Fix: Broken site layout on plugin upgrade [ED-8202]" (#20136)
* Fix: Broken site layout on plugin upgrade [ED-8202] (#20137)
* Tweak: Added `dnt` param to Vimeo embed background and Video widget [ED-8191] (#20133)
* New: Introducing Background images lazy load experiment [ED-7846] (#19706)
* Fix: Pasting an element into the Preview Container throws a JS error [ED-8181] (#20118)

#### 3.9.0-dev3 - 2022-10-23
* Tweak: Add `rem` to gap between elements control [ED-8343] (#20008)
* Fix: Change all browser behavior by dark mode [ED-8212] (#20013)
* Tweak: Background video should have a background color [ED-8437] (#9885)
* Tweak: Consistent border radius units [ED-8436] (#20033)
* Fix: Container isolation: isolate issues (#19834, #19845, #19705) [ED-8353] (#20014)
* Fix: Kit Library order on WP dashboard menu was changed [ED-8221] (#19969)
* Tweak: Add `s` & `ms` units to transition-duration controls [ED-8427] (#20042)
* Fix: Swiper functionality is not working as expected [...] (#19891) [ED-7916] (#19919)
* Fix: Custom background position not inherited on mobile and front end [ED-8329] (#19883)
* Fix: Page should scroll to the loop area and not to the top of the page [ED-8447] (#20075)
* Tweak: Changed container class names to shorter names (markup changes!) [ED-8392] (#20073)
* Tweak: Upgrade the autoprefixer package to better minify CSS files [ED-8404] (#20000)

#### 3.9.0-dev2 - 2022-10-03
* Fix: Error on connect with `WP_DEBUG` = true [ED-8252] (#19862)
* Fix: Error after connecting from a promotion page and refreshing the page [ED-8259] (#19863)
* Fix: Template Library - Empty view jumps when searching [ED-8288] (#19859)
* Tweak: Button widget - responsive control for border radius [ED-7544] (#19884)
* Tweak: Add responsive option for caption to images widgets (#19852)
* Fix: Container - Apply inner container class to widgets inside the container [ED-8137] (#19686)
* Tweak: Add responsive capability to BG image opacity [ED-8344] (#19940)
* Fix: Import/Export - Not importing the relations between terms [ED-8265] (#19875)
* Tweak: Add responsive capability to BG image hover opacity [ED-8344] (#19947)
* Fix: Import/Export - Can't import on a new site [ED-8240] (#19850)
* Fix: Control Conditions - Using respon. values in selector placeholders causes fatal error [ED-8355] (#19934)
* Fix: Core - Loop template does not change live when editing the design in-place [ED-8371] (#19951)
* Tweak: Make Elementor compatible to WebP [ED-7895] (#19558)
* Tweak: Changed container class names to shorter names (markup changes!) [ED-8347] (#19962)
* Fix: See-it-live button missing on import kit summery [ED-8258] (#19937)
* Fix: Container - apply new inner container class [ED-8392] (#19970)
* Revert "Tweak: Changed container class names to shorter names (markup changes!) [ED-8347]" (#19972)
* Revert "Fix: Container - apply new inner container class [ED-8392]" (#19971)

#### 3.9.0-dev1 - 2022-09-20
* Fix: Page is not loading due to errors in the deprecation module (#19390, #19562) [ED-8031] (#19571)
* Tweak: Update pro promotion button in plugin Core onboarding [ED-7959] (#19507)
* Tweak: Increase inputs in Replace URL tool to support long URLs [ED-8030] (#19565)
* Fix: The title of editor control are not responsive [ED-8034] (#19577)
* Fix: User shouldn't be able to press THEME BUILDER logo [ED-7923]  (#19508)
* Fix: Element Base - Pass $overwrite correctly in `add_link_attributes()`. Closes #11498 [ED-8039] (#19152)
* Fix: Theme Builder - Add New popup is not working properly [ED-8044] (#19593)
* Tweak: Add Dynamic Tags for Global Colors [ED-8050] (#19598)
* Fix: Import/Export - WooCommerce products are not being imported [ED-7932] (#19603)
* Tweak: Improve the UX of dependencies between experiments [ED-7494] (#19037)
* Fix: Kit Library & Theme Builder are not loading [ED-8058] (#19610)
* Fix: Import/Export CLI - Import not overriding all templates conditions [ED-8045] (#19607)
* Fix: Changed link to https (#19630)
* Fix: Error message appears on front if WooCommerce is activated (#19533) [ED-8032] (#19631)
* Fix: Web CLI requires jQuery [ED-8059] (#19619)
* Tweak: Added clarification for the 'a' tag to the container element (#19599)
* Fix: Translation (#19652)
* Tweak: Add more units to icon and icon-box widgets [ED-8103] (#19651)
* Tweak: Added em unit for border radius to layout elements (#19491)
* Tweak: Redundant code in widgets having image (#12329)
* Tweak: Synchronous elements initialization may produce long JavaScript tasks (#15229)
* Tweak: Update bug report template (#19606)
* Tweak: Update bug report template (#19675)
* Tweak: Improved performance of Inline Fonts Icons experiment [ED-8118] (#19672)
* Fix: Background Image Custom Position/Size controls not shown for Mobile/Tablet [ED-8126] (#19677)
* Tweak: Changed Full-width and Boxed content width functionality in Container [ed-7867] (#19385)
* Tweak: Responsive text-align in Columns & Sections [ED-6803] (#16215)
* Fix: `is_current_user_can_edit` not working correctly when `$post_id` missing [ED-8136] (#19683)
* Tweak: Added text stroke for some widgets [ED-6780] (#18533)
* Tweak: Add more units to testimonial and image-box widgets (#19694)
* Tweak: Add labels to font weight numeric values [ED-7670] (#18990)
* Fix: Kit Library Connect doesn't work in 3.8.0 with production Pro [ED-8156] (#19712)
* Tweak: Change default Google fonts loading method to "Swap" [ED-7896] (#19692)
* Tweak: Allow removing the last imported Kit [ED-6987] (#19510)
* Fix: Import resolver page is being displayed on empty import conflict [ED-8106] (#19661)
* Tweak: Soft deprecation for the wrong using with widgets API [ED-8171] (#19736)
* Fix: Posts widget - query is not being imported correctly when importing a Kit [ED-4687] (#19636)
* Fix: Custom Width on tablet/mobile generates wrong value when desktop is set to default [ED-8122] (#19700)
* Tweak: Add size units to "Typography" > "Letter Spacing" [ED-8184] (#19745)
* Tweak: Added custom logo button [ED-8116] (#19740)
* Revert "Tweak: Soft deprecation for the wrong using with widgets API [ED-8171]" (#19755)
* Fix: Custom Image Size generates a fatal error after updating to PHP 8+ [ED-8165] (#19722)
* Fix: Improter WordPress root write permissions check causes import failures [ED-5913] (#19380)
* Fix: Import Export admin page - revert button causing JS console error [ED-8196] (#19767)
* Fix: CSS minified files not generated on build [ED-8199] (#19768)
* Fix: Editor menu items not working [ED-8168] (#19733)
* Tweak: Added migrate script to handle PHP8 type error on custom image size [ED-8166] (#19725)
* Tweak: Container - Move editor code to an editor scss file [ED-7940] (#19421)
* Tweak: Change the Container experiment status to Beta [ED-8085] (#19788)
* Fix: Empty state placeholder is not displayed in various widgets (#19446) [ED-7957] (#19674)
* Fix: Experiments - Status change callback not working [ED-8201] (#19781)
* Fix: When copy-pasting a widget on a page, the widget is being pasted in a Section (..) [ed-7790] (#19451)
* Tweak: Changed right-click functionality when adding a new Container [ED-7870] (#19684)
* Fix: Replaced link for better clarity in Site Settings (#19817)
* Fix: On import - replace dynamic content fix [ED-8280] (#19847)
* Fix: Can't activate or connect to the library on some languages [ED-8275] (#19848)
* Tweak:  Adjust the tag display in the experiments screens [ED-8277] (#19846)
* Tweak: Remove an option to create a custom logo in Site Settings [ED-8290] (#19860)
* Fix: Background Image - Custom X  Position doesn't work for non-desktop devices [ED-8224] (#19818)
* Fix: Connect - Connect notice appearing in a wrong place [ED-8249] (#19849)

#### 3.8.0-dev4 - 2022-08-21
* Fix: Default Flex Grow affects the layout [ed-7869] (#19437)
* Fix: Widget width is not working as expected (#19398) [ed-7915] (#19438)
* Fix: Kit sort select doesn't change from asc to desc [ED-7976] (#19490)
* Fix: Background Fallback image is hiding the background video in Container [ED-7944] (#19499)
* Fix: Motion Effects in Column in any Theme Builder template prevents Editor from loading [ED-7943] (#19435)
* Fix: Admin Menu Manager not working as expected [ED-7989] (#19517)
* Fix: Importing fails when post type file is missing [ED-8002] (#19518)

#### 3.8.0-dev3 - 2022-08-15
* Fix: Notes - Promotion dialog not opening in Panel menu [ED-7744] (#19192)
* Fix: Align notices to RTL sites [ED-4809] (#19337)
* Fix: Export kit doesn't work in a Multisite Network [ED-7696] (#19146)
* Tweak: Add to the GoPro link URL from the Kit Library more UTM parameters [ED-7745] (#19336)
* Fix: Theme Builder - Close window button isn't working [ED-7920] (#19379)
* Fix: Breakpoints manager shouldn't run deprecated hook [ED-7929] (#19404)
* Fix: Dynamic fields are missing in any number input field (#19419) [ED-7945] (#19429)
* Fix: Controls do not implement a value of 0 [ED-7935] (#19411)
* Fix: Importing and exporting duplicated posts [ED-7796] (#19381)
* Fix: Experiments - Learn more button does not open the Help center in the notice (#19448) [ED-7963] (#19467)
* Tweak: Import/Export CLI and UI mechanisms were merged into a unified service [ED-7157] (#19044)
* Fix: Width and Elements gap values (ED-7694) (#19354)

#### 3.8.0-dev2 - 2022-08-15
* Fix: Go pro link is too wide in export kit tool [ED-7575] (#19317)
* Fix: Notice Bar can't be closed in the editor [ED-7854] (#19321)
* Tweak: PHP 5.6 is deprecated [ED-7778] (#19313)
* New: Loop builder - Page should scroll to the loop area and not to the top of the page [ED-7862] (#19314)
* Tweak: Don't show exit-to modal if exit-to value was changed [ED-7484] (#19279)
* Fix: Widget width is not working as expected In Container [ED-7723] (#19286)
* Fix: Container outputs redundant CSS lines [ed-7727] (#19294)
* Fix: Import Kit wizard doesn't close the app when triggered from the Kit Library [ED-6900] (#18436)
* Tweak: Add a hook to get manifest data in import CLI command [ED-7671] (#19211)
* Fix: Add documentation for deprecated `Control_Icon` class [ED-7763] (#19303)

#### 3.7.0-dev10 - 2022-06-15
* Add more thousands separators (#18026)
* Fix: Responsive state is not working correctly in Container (#18551) [ED-7314] (#18789)
* Tweak: Merged similar translation strings (i18n) [ED-7154] (#18618)
* Fix: Critical error appeared in external apps when no page is selected as "Homepage" in Reading Settings [ED-7349] (#18801)
* Fix: Element is attached to the right instead of its original position when dragging it into a container [ED-7302] (#18802)
* Fix: Anchor Widget - Enforced better security policies [ED-7250] (#18806)
* Tweak: Added custom icons to various core widgets and features [OBXT-493] (#18231)
* Tweak: Added "em" unit for some widgets for border radius [ED-6775] (#17904)
* Tweak: Information sharing checkbox in onboarding flow was removed [ED-7316] (#18782)
* Fix: "Exit to" is not working after prompting the user to exit [ED-6927] (#18399)
* Tweak: Add "Skip and Deactivate" text button to deactivation survey (#18779)
* Fix: Overlay background is not visible [...] in Container (#18433, #18391) [ED-7315] (#18804)
* Tweak: Updated HTML A tag note in Container [ED-7368] (#18850)
* Fix: Columns control not pre-selected when choosing "Column" from the pre-designed container structures (#18390) [ED-7355]
* Tweak: Rearrange the Container panel for better discoverabilty [ED-7151] (#18788)
* Revert "Internal: Better handling file reading [ED-7104]" [ED-7396] (#18872)
* Fix: Site Settings - Gradient background doesn't work in the Editor using global colors [ED-6994] (#18419)
* Tweak: Uploads Manager - Added filters to allow modifying upload temp paths (#18565) [ED-7410] (#18566)
* Fix: Inline SVG Icons experiment does not behave correctly due to `file_get_contents()` optimization [ED-7395] (#18924)
* Fix: Control WYSIWYG - Enforced better security policies [ED-7249] (#18856)

#### 3.7.0-dev9 - 2022-05-29
*  Internal: Docs - Container [ED-7047] (#18614)
* Fix: Shortcode doesn't work in popups or templates [ED-7126] (#18654)
* New: Notes - Promotion [ED-5523] (#18377)
*  Tweak: Notes - Promotion to Core users [ED-5523]  (#18664)
* Fix: Images - Thumbnail files not deleted upon deleting its main image/attachment [ED-6973] (#18560)
* Fix: Onboarding - Playwright "Create Account" popup test fails [ED-7270] (#18712)
* Tweak: Tag viewed Kit based on UTM [ED-7139] (#18688)
* Revert "Internal: DevTools - JS Deprecation Utility [ED-7003] (#18421)" (#18753)

#### 3.7.0-dev8 - 2022-05-15
* Tweak: Tools - Change font awesome migration process [ED-6935] (#18491)
* Fix: Repeater default value was counted as a value (#18622)
* Tweak: Controls - Added option to Number Scrubbing in numeric fields [ED-6910] (#18429)

#### 3.7.0-dev7 - 2022-05-08
* New: Modules/Usage - Add page settings to tracking data [ED-1229] (#13408)
* Tweak: Custom size in image widget can no longer accept non-numeric characters [ED-7101] (#18570)
* Tweak: Added WooCommerce CSS variables (#18571)
* Fix: Container - Sometimes changing a control breaks the Editor [ED-7100] (#18569)

#### 3.7.0-dev6 - 2022-05-01
* Fix: Missing escaping translation to module onboarding (#18445) [ED-7022]
* Fix: Template library - Clear leftovers [ED-7030] (#18507)
* Fix: PHP Error when fetching System Info report for Experiments that don't have a title [ED-6879] (#18233)

#### 3.7.0-dev5 - 2022-04-17
* Tweak: Onboarding [ED-6991] (#18417)
* Tweak: Onboarding fixes and tweaks [ED-6924, ED-6832] (#18411)
* Tweak: Nested Elements - Infra [ED-6591] (#17957)
* Tweak: Update Onboarding module (#18440)

#### 3.7.0-dev4 - 2022-04-10
* Fix: Container is not functioning as expected [ED-6845] (#18339)
* Tweak: Onboarding - Updated copy for Hello screen, added footnote [ED-6817] (#18342)
* Fix: Import Export fail when trying to import unregister taxonomies [ED-6919] (#18322)
* Tweak: Add plugins support to the CLI import process [ED-6902] (#18316)
* Closes 18155 - verify if svg file exists before updating _elementor_inline_svg (#18162) [ED-6872]
* Fix: Favorites in Template Library doesn't work properly [ED-6528] (#18102)
* Tweak: Theme Builder - Open "Go Pro" link in new tab [ED-6396] (#18350)
* Fix: Nested Infra - Display Conditions window is blank [ED-6874] (#18301)
* Fix: PHP 8.1 - Throws warnings in System info [ED-6869] (#18277)
* Tweak: Allowing manual insertion of negative values to numeric fields [ED-6909] (#18371)

#### 3.7.0-dev3 - 2022-04-03
* Tweak: Nested Infra - Select repeater item command [ED-6682] (#18039)
* Fix: Container is not functioning as expected [ED-6747] (#18199)
* Tweak: Added the Revisions link to Import/Export intro screen [ED-2696] (#18200)
* Fix: Editor Panel - Pasting a term in the widget search doesn't show the results [ED-5823] (#18004)
* Fix: Revert - ED-2696 [ED-6844] (#18198)
* Fix: Custom icons disappear at frontend if name contains numbers [ED-1040] (#18110)
* Fix : Custom Fonts - the font disappears if the name contains only numbers [ED-6760] (#18116)
* Fix: Tabs a11y is not performing as expected [ED-5409] (#17491)
* Nullish operator added to e-select2 library (#18203)
* Fix: Issues in the CLI Import command which caused the import failure [ED-6857] (#18206)
* Fix: JS API - Partial refactor history versions are not clickable [ED-6588] (#18219)
* Fix: Review requests (#18221)
* Fix: Merge issue cancelling 6509 and fixing call to `get_elementor_home_page_url()` [ED-6861] (#18225)
* Fix: Editor - Not loading with some 3rd party plugins [ED-6882] (#18237)
* Tweak: Updated changelog to v3.6.1 (#18239)
* Fix: Alignment didn't respond to additional custom breakpoints in Icon List widget [ED-4966] (#18250)
* Tweak: Allow exiting to different WP screens [ED-6238] (#17637)
* Fix: Container is not functioning as expected [ED-6904] (#18292)
* Tweak: Added another preset to include option for both row and column single container directions [ED-6493] (#18214)
* Fix: Nav Menu Hamburger - Menu missing on iOS 14 or macOS 13 [ED-6886] (#18276)
* Revert "Internal: Nested Elements - Infra fixes & tests [ED-6591] (#18297)" (#18320)
* Fix: Word spacing in Global Font Typography affects all texts on the site [ED-5749] (#18287)
* Fix: Missing esc translations (#17923)

#### 3.7.0-dev2 - 2022-03-17
* Fix: Issues in the CLI Import command which caused the import failure [ED-6805] (#18171)

#### 3.7.0-dev1 - 2022-03-16
* Fix: Overlay of image upload appeared as dark mode even when editor was set to light mode [ED-5870] (#17903)
* New: Added container element [ED-2609] (#16926)
* Fix: Container - Widget width control is broken when Container experiment is active [ED-6565] (#18033)
* Fix: Posts, Archive Posts - Widget appears empty while using PHP 8.1 [ED-6466] (#17869)
* Fix: Container is not functioning as expected [ED-6592] (#18078)
* Fix: PHP 8.1 throws errors and notices [ED-6708] (#18076)
* Fix: JS API Refactor Backward Compatibility [ED-6692] (#18068)
* Fix: Visit site link when finishing the import process leads to the wrong place [ED-6509] (#18080)
* Tweak: Added the Revisions link to Import/Export intro screen [ED-2696] (#18082)
* Fix: Edit areas - Error is thrown when changing edit mode [ED-6745] (#18101)
* Fix: Container is not functioning as expected [ED-6709] (#18085)
* Fix: Import export from kit library [ED-6684] (#18047)
* Fix: Import export from kit library [ED-6684] (#18122)
* Fix: Web-CLI was not loaded in the React app [ED-6768] (#18119)
* Fix: Container - Direction control selection is not being reflected in responsive devices [ED-6710] (#18129)
* Tweak: Add the ability to identify a kit [ED-6511] (#18024)
* Tweak: Added previous active kit to the site options for future restore option [ED-6751] (#18088)
* Fix: Accordion/toggle Widget with sticky caused the page to scroll after clicking [ED-6766] (#18114)
* Fix: CSS render is delayed in the Editor [ED-6767] (#18148)
* Fix: Imported kit doesn't contain the global design [ED-6783] (#18150)
* Tweak: Admin Dashboard - Open the Go Pro link in a new tab [ED-6347] (#18112)
* New: Onboarding Analytics [ED-6162] (#18049)
* Fix: Menu Cart Widget with 3.6.4 Pro - The icon moved to the left [ED-6797] (#18158)
* Revert "Fix: Image size with a link shrunk in Image widget [ED-3397] (#17245)" (#18159)
* Tweak: Import All command should skip the Plugins screen and start import process[ED-6510] (#18131)

#### 3.6.0-dev45 - 2022-03-03
* Fix: Initial site name loads incorrectly in input, selecting image for logo causes JS error (#18036)
* Fix: Revert `elementSettingsModel` deprecation from #17374 [ED-6575] (#18044)

#### 3.6.0-dev44 - 2022-03-02
* Fix: Lower custom breakpoints didn't inherits upper breakpoints values in frontend [ED-6235] (#17475)
* New: Updated Elementor Icons library to v5.15.0 (#17632)
* Fix: Elementor React App - Back to Dashboard and Close (x) button can lead to wrong page [ED-6443] (#17752)

#### 3.6.0-dev43 - 2022-03-01
* Tweak: Added focus state and description on play icon in Video widget (#17559)
* Tweak: Added new variables colors to variables.scss file [OBXT-361] (#17560)
* Tweak: Added dynamic tag control to various core widgets and features [OBXT-384] (#17588)
* Tweak: Adjusted the inline icon control for design flexibility [OBXT-… (#17696)
* Tweak: Add Lazy load to all the widgets using Swiper [ED-2409] (#17734)
* Fix: Hash Commands [ED-6664] (#18018)
* Fix: Mobile browser background didn't work (#16566) [ED-6612] (#17972)
* New: Onboarding [ED-6175, PRDH-871] (#17605)

#### 3.6.0-dev42 - 2022-02-28
* Tweak: Added responsive capability to Icon Position control in Icon Box widget (#3040) [OBXT-573] (#17781)
* Tweak: Updated changelog for v3.5.6 (#18003)
* Tweak: One click site [ED-6569] (#17947)

#### 3.6.0-dev41 - 2022-02-24
* Fix: GitHub issue creation minor fixes [ED-6376] (#17918)
* Fix: GitHub issue creation minor fixes (#2) [ED-6376]
* Fix: GitHub issue creation minor fixes (#3) [ED-6376] (#17936)
* Tweak: Lightbox [ED-6517] (#17847)
* Tweak: Nested Infra - Allow dependencies for experiments [ED-6421] (#17663)

#### 3.6.0-dev40 - 2022-02-22
* Fix: Navigator keeps opening when dragging in a new widget [Dev edition] [ED-5776] (#17905)

#### 3.6.0-dev39 - 2022-02-17
* Fix: `remove_responsive_control()` doesn't remove controls for additional Custom breakpoints [ED-6294] (#17529)

#### 3.6.0-dev38 - 2022-02-14
* Tweak: Updated changelog for v3.5.5 (#17691)
* Fix: When the inline-font-icons experiment is active, the icon of the video lightbox is not getting the correct color (#17628)
* Fix: Video Widget - Privacy mode videos don't play in Lightbox since v3.5.5 [ED-6482] (#17747)
* Tweak: Admin Menu Handling Improvements (#17263)
* Fix: Favorites with WooCommerce widgets throws a critical error if it's is deactivated [ED-6442] (#17731)
* Fix: When the Additional Breakpoints experiment is active, the 'devices' parameter for `add_responsive_control()` isn't supported [ED-6478] (#17746)
* Fix: Global widgets search didn't work when core 3.5 is active [ED-5926] (#17331)
* Fix: tests (#17822)
* Tweak: Make typography weight strings translatable [ED-6392] (#17826)
* Tweak: Allowing to import and export plugins as part of the kit content [ED-4978] (#17830)
* Tweak: Remove legacy style tab and imporve CSS code [ED-6524] (#17833)
* Fix: Button trait alignment names are wrong [ED-6474] (#17736)
* Fix: Playwright for global widget search fails [ED-6523] (#17832)

#### 3.6.0-dev37 - 2022-02-03
* Fix: System info file displays inaccurate WP memory limit. [ED-5717] (#17252)

#### 3.6.0-dev36 - 2022-01-31
* Tweak: Added "Convert to Container" control to each legacy section, inner section and page [ED-5488] (#17515)

#### 3.6.0-dev35 - 2022-01-26
* Tweak: Test Responsive reverse columns control inoperative [ED-5931] (#17341)
* Tweak: Internal - Import Kit - Allow to override Kit import temp directory path [ED-5914] (#17381)

#### 3.6.0-dev34 - 2022-01-25
* Tweak: Handle deprecations [ED-5601]  (#17374)
* Tweak: Change Developer Edition promotional notice triggers [ED-5562] (#17528)

#### 3.6.0-dev33 - 2022-01-24
* Tweak: Updated changelog to v3.5.4 (#17546)
* Fix: When trying to import a kit, the general error try-again action is incorrect [ED-6273] (#17513)
* Tweak: Lightbox - only play a video if it has a registered provider [ED-6293] (#17527)

#### 3.6.0-dev32 - 2022-01-18
* Tweak: Updated Google Fonts list [ED-6245] (#17496)
* Tweak: Updated changelog for v3.5.4 (#17498)

#### 3.6.0-dev31 - 2022-01-17
* Fix: Debug Util - `onError` throws an error because of bad parameters [ED-6190] (#17435)
* Tweak: Update E-Icons library to v5.14.0 (#17378)
* Fix: Can't edit the page if Favorite Widgets are used in it (and experiment is enabled) [ED-6166] (#17426)

#### 3.6.0-dev30 - 2022-01-13
* Tweak: Added a deprecation notice for PHP 5.6 in WP dashboard [ED-5770] (#17273)
* Fix: Dynamic Tag switcher disappear in RTL (#17469)

#### 3.6.0-dev29 - 2022-01-12
* Fix: Can’t drag & drop elements inside a container  [ED-6077] (#17320)

#### 3.6.0-dev28 - 2022-01-10
* Fix: widescreen breakpoint  effects query media order (#17314)
* Tweak: Adding Responsive option to Text Stroke [ED-5846] (#17235)

#### 3.6.0-dev27 - 2022-01-07
* Fix: Core SVG icons from template library are imported empty [ED-5980] (#17373)
* Tweak: Adding Import Export to the Finder [ED-3997] (#17259)
* Tweak: Add border options in Image Box widget [ED-3927] (#17250)
* Tweak: Adding Kit Library to the Finder [ED-3726] (#17330)
* Tweak: "Library page" was replaced with "Page template" in Finder [ED-6138] (#17360)

#### 3.6.0-dev26 - 2022-01-06
* Fix: Internal - Swiper Util accepts only jQuery instances as the container parameter [ED-6050] (#17319)

#### 3.6.0-dev25 - 2022-01-03
* Fix: Image size with a link shrunk in Image widget [ED-3397] (#17245)

#### 3.6.0-dev22 - 2021-12-26
* Fix: Responsive reverse columns control inoperative []ED-5877 (#17246)
* Tweak: Remove `elementor-section-wrap` by adding it to the DOM experiment [ED-5865] (#17192)
* Fix: Favorites are not kept after page reload [ED-5903] (#17242)
* Tweak: Promoted some experiments status to Stable (#16986)
* Fix: Elements are pasted in reverse order when copying and pasting multi-selected elements [ED-5723] (#17231)
* Fix: Inner Section can’t be dragged into a column [ED-5910] (#17258)
* Tweak: Updated changelog v3.5.2 (#17281)
* Fix: Changelog links (#17285)

#### 3.6.0-dev21 - 2021-12-20
* Tweak: Delete deprecated 'Scheme' classes alias [ED-5894] (#17217)
* Fix: Revert task ED-1628 - document handle below the header with z-index above 99 (#17205)
* Revert "Tweak: Added Safe mode for Experiments [ED-741] (#16659)" (#17206)
* Tweak: Changelog for v3.5.1 (#17184)

#### 3.6.0-dev20 - 2021-12-17
* Tweak: New Admin Menu Rearrangement Experiment (#17208)
* Fix: Missing a wrapper when the Inner Section widget is in use (#17187) [ED-5875] (#17209)
* Fix: Missing escaping native WP translations (#17210)

#### 3.6.0-dev19 - 2021-12-16
* Fix: SVG and JSON files caused errors in Drag from Desktop [ED-5529] (#16966)

#### 3.6.0-dev18 - 2021-12-14
* Tweak: Navigator appears by default when loading the editor [ED-5742] (#17146)
* Fix: Elements are pasted in reverse order when copying and pasting multi-selected elements [ED-5723] (#17148)
* Revert "Fix: Elements are pasted in reverse order when copying and pasting multi-selected elements [ED-5723] (#17148)" (#17171)
* Fix: Elements are pasted in reverse order when copying and pasting multi-selected elements [ED-5723] (#17172)

#### 3.6.0-dev17 - 2021-12-13
* Tweak: Added `Difference`, `Exclusion` and `Hue` to Column and Section blend mode options [ED-5733] (#17079)
* New: Added a reusable button trait [ED-4597] (#17041) (#17092)
* Tweak: Favorites Widgets - Added an indication that a widget was added [ED-5500] (#17058)
* Tweak: Updated changelog release date (#17145)
* Fix: Several functions are being executed when not supposed to in all WP Dashboard screens [ED-5795] (#17163)
* Tweak: Added option to change the color of the navigation dots in carousel type widgets [ED-4970] (#16646)

#### 3.6.0-dev14 - 2021-12-01
* Fix: Dev Edition notice appears inside the Form Submission window [ED-4913] (#17067)

#### 3.6.0-dev11 - 2021-11-26
* Fix: Saving a template with a condition throws an error [ED-5661] (#17040)

#### 3.6.0-dev10 - 2021-11-24
* Fix: Templates Library is unreachable [ED-5613] (#17019)
* Fix: PayPal Button widget doesn't work with Core 3.5.0 beta3 [ED-5664] (#17022)

#### 3.6.0-dev9 - 2021-11-23
* Tweak: Contextual texts in the prompts - Document settings [ED-5324] (#16834)
* Tweak: Prompt the user permission to allow unfiltered file uploads in Import Template flow [ED-5279] (#16910)
* Fix: Broken button shortcodes and internal URLs (#16971) [ED-5566] (#17005)
* Fix: The data updater notice removed from update plugin page [ED-5381] (#17004)
* Fix: Choose control was in reversed order in RTL sites [ED-5461] (#16893)
* Fix: Scroll snap throw undefined error on Archive pages [ED-5544] (#17015)
* Fix: Z-index control override negative values (#17016)
* Fix: Text path widget is not optimized and makes redundant file system calls [ED-5420] (#16952)
* Fix: Conflict with JetEngine plugin in v3.5.0 [ED-5603] (#17021)
