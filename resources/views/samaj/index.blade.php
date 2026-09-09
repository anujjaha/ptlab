<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NAGAR BRAHMIN Samaj — Community Directory</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Nunito:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --sf:#E8622A;--sf-l:#F28C5E;--sf-p:#FEF3EC;
  --gn:#1A5C35;--gn-l:#237A48;--gn-p:#EAF4EE;
  --gd:#B8820A;--gd-l:#D4A017;--gd-p:#FBF5E6;
  --cream:#FAFAF7;--white:#FFFFFF;
  --ink:#1C1410;--inkm:#4A3828;--inks:#8A7260;--inkf:#C5B8A8;
  --bd:#E8DDD0;--bds:#F0E9E0;
  --r:12px;--rl:18px;
}
html{scroll-behavior:smooth}
body{font-family:'Nunito',sans-serif;background:var(--cream);color:var(--ink);min-height:100vh;overflow-x:hidden}


/* ── TOP STATS TICKER ───────────────────────────── */
.top-ticker{background:linear-gradient(90deg,#1A5C35,#237A48);padding:7px 0;overflow:hidden;position:relative}
.ticker-inner{display:flex;align-items:center;gap:0;white-space:nowrap;animation:ticker 40s linear infinite}
.ticker-inner:hover{animation-play-state:paused}
@keyframes ticker{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
.ticker-stat{display:inline-flex;align-items:center;gap:8px;padding:0 28px;border-right:1px solid rgba(255,255,255,0.2);color:white;font-size:12px;font-weight:600}
.ticker-stat .t-num{font-family:'Cormorant Garamond',serif;font-size:16px;font-weight:700;color:#F8D87A}
.ticker-stat .t-dot{width:6px;height:6px;background:#F28C5E;border-radius:50%;flex-shrink:0}


/* ── TOP NAV ─────────────────────────────────────── */
.topnav{position:sticky;top:0;z-index:500;background:rgba(255,255,255,0.97);backdrop-filter:blur(12px);border-bottom:1px solid var(--bd);box-shadow:0 1px 8px rgba(0,0,0,0.06)}
.topnav-inner{max-width:1280px;margin:0 auto;display:flex;align-items:center;padding:0 24px;height:62px;gap:6px}
.nav-logo{display:flex;align-items:center;gap:10px;text-decoration:none;flex-shrink:0;margin-right:20px;cursor:pointer}
.nav-logo-icon{width:38px;height:38px;border-radius:9px;background:linear-gradient(135deg,var(--sf),var(--sf-l));display:flex;align-items:center;justify-content:center;font-size:18px;box-shadow:0 2px 8px rgba(232,98,42,0.3);flex-shrink:0}
.nav-logo-txt{font-family:'Cormorant Garamond',serif;font-size:17px;font-weight:700;color:var(--ink);line-height:1.1}
.nav-logo-txt small{display:block;font-family:'Nunito',sans-serif;font-size:10px;font-weight:600;color:var(--inks);letter-spacing:0.7px;text-transform:uppercase}
.nav-links{display:flex;align-items:center;gap:1px;flex:1}
.nav-btn{padding:7px 13px;border-radius:8px;font-size:13px;font-weight:600;color:var(--inkm);cursor:pointer;transition:all 0.16s;white-space:nowrap;border:none;background:transparent;font-family:'Nunito',sans-serif}
.nav-btn:hover{background:var(--sf-p);color:var(--sf)}
.nav-btn.active{background:var(--sf-p);color:var(--sf)}
.nav-srch{flex:1;max-width:260px;margin:0 12px;display:flex;align-items:center;background:var(--cream);border:1.5px solid var(--bd);border-radius:9px;padding:0 11px;gap:7px;transition:all 0.2s}
.nav-srch:focus-within{border-color:var(--sf);background:white;box-shadow:0 0 0 3px rgba(232,98,42,0.08)}
.nav-srch input{border:none;outline:none;background:transparent;font-size:13px;font-family:'Nunito',sans-serif;color:var(--ink);width:100%;padding:7px 0}
.nav-srch input::placeholder{color:var(--inks)}
.srch-ic{font-size:13px;opacity:0.55;flex-shrink:0}
.nav-acts{display:flex;align-items:center;gap:7px;flex-shrink:0}
.btn-ghost{padding:7px 13px;border-radius:8px;font-size:13px;font-weight:600;color:var(--inkm);cursor:pointer;transition:all 0.16s;border:1.5px solid var(--bd);background:white;font-family:'Nunito',sans-serif}
.btn-ghost:hover{border-color:var(--sf);color:var(--sf)}
.btn-cta{padding:8px 17px;border-radius:8px;font-size:13px;font-weight:700;color:white;cursor:pointer;transition:all 0.16s;border:none;background:linear-gradient(135deg,var(--sf),var(--sf-l));font-family:'Nunito',sans-serif;box-shadow:0 2px 8px rgba(232,98,42,0.28)}
.btn-cta:hover{box-shadow:0 4px 16px rgba(232,98,42,0.38);transform:translateY(-1px)}

/* ── HERO ─────────────────────────────────────────── */
.hero{background:linear-gradient(135deg,#1C1410 0%,#3D2010 40%,#5C2A0A 70%,#E8622A 100%);padding:36px 14px 28px;text-align:center;position:relative;overflow:hidden}
.hero::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/svg%3E")}
.hero-inner{max-width:640px;margin:0 auto;position:relative;z-index:1}
.hero-badge{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.22);color:rgba(255,255,255,0.9);border-radius:20px;padding:5px 14px;font-size:11px;font-weight:700;letter-spacing:0.8px;text-transform:uppercase;margin-bottom:18px}
.hero h1{font-family:'Cormorant Garamond',serif;font-size:46px;font-weight:700;color:white;line-height:1.1;margin-bottom:12px}
.hero h1 em{color:#F8D87A;font-style:italic}
.hero p{color:rgba(255,255,255,0.75);font-size:15px;line-height:1.75;font-weight:500}

/* ── LAYOUT ───────────────────────────────────────── */
.page-wrap{max-width:1280px;margin:0 auto;padding:24px 24px 40px}
.layout{display:grid;grid-template-columns:228px 1fr;gap:22px}

/* ── SIDEBAR ──────────────────────────────────────── */
.sidebar{position:sticky;top:78px;height:fit-content;display:flex;flex-direction:column;gap:13px}
.fp{background:white;border:1px solid var(--bd);border-radius:var(--r);padding:16px;box-shadow:0 1px 4px rgba(0,0,0,0.05)}
.fp-title{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:var(--sf);margin-bottom:13px;display:flex;align-items:center;gap:6px}
.fp-title::after{content:'';flex:1;height:1px;background:var(--bd)}
.fp-row{display:flex;align-items:center;gap:8px;margin-bottom:7px;cursor:pointer}
.fp-row input[type=checkbox]{accent-color:var(--sf);width:14px;height:14px;flex-shrink:0;cursor:pointer}
.fp-row label{font-size:13px;color:var(--inkm);cursor:pointer;flex:1;font-weight:500}
.fp-row .fbadge{font-size:10px;font-weight:600;background:var(--bds);color:var(--inks);padding:1px 7px;border-radius:20px}
.fp-sel{width:100%;border:1.5px solid var(--bd);border-radius:8px;padding:8px 10px;font-size:13px;font-family:'Nunito',sans-serif;color:var(--ink);background:white;outline:none;transition:border 0.2s}
.fp-sel:focus{border-color:var(--sf)}

/* ── CONTENT ──────────────────────────────────────── */
.content-area{min-width:0}

/* ── ANNOUNCE ─────────────────────────────────────── */
.announce{background:linear-gradient(135deg,var(--gd-p),#FFF9F0);border:1px solid #EDD799;border-left:4px solid var(--gd-l);border-radius:var(--r);padding:13px 16px;margin-bottom:18px;display:flex;align-items:flex-start;gap:11px}
.announce-ic{font-size:20px;flex-shrink:0;margin-top:1px}
.announce h4{font-size:13px;font-weight:700;color:var(--gd);margin-bottom:3px}
.announce p{font-size:12.5px;color:var(--inkm);line-height:1.6}

/* ── CONTENT HEADER ───────────────────────────────── */
.chdr{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;flex-wrap:wrap;gap:10px}
.chdr-l h2{font-size:20px;font-family:'Cormorant Garamond',serif;font-weight:700;color:var(--ink)}
.chdr-l p{font-size:12px;color:var(--inks);margin-top:1px}
.chdr-r{display:flex;align-items:center;gap:8px}
.sort-sel{border:1.5px solid var(--bd);border-radius:8px;padding:6px 9px;font-size:12px;font-family:'Nunito',sans-serif;color:var(--ink);background:white;outline:none;cursor:pointer}
.vtgl{display:flex;border:1.5px solid var(--bd);border-radius:8px;overflow:hidden}
.vbtn{padding:6px 11px;font-size:12px;font-weight:600;color:var(--inks);background:white;border:none;cursor:pointer;font-family:'Nunito',sans-serif;transition:all 0.14s}
.vbtn.active{background:var(--sf);color:white}

/* ── MEMBERS GRID ─────────────────────────────────── */
.mem-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.mem-card{background:white;border:1px solid var(--bd);border-radius:var(--rl);overflow:hidden;cursor:pointer;transition:all 0.22s}
.mem-card:hover{border-color:var(--sf);box-shadow:0 8px 28px rgba(232,98,42,0.11);transform:translateY(-3px)}
.mc-banner{height:68px;position:relative;flex-shrink:0}
.mc-badge{position:absolute;top:10px;right:10px;font-size:9.5px;font-weight:700;padding:3px 9px;border-radius:20px;text-transform:uppercase;letter-spacing:0.5px}
.bb{background:#FFF0E6;color:#C04B00}.bp{background:#E8F5EE;color:#1A5C35}
.bn{background:#EEE8FF;color:#5B2D8E}.bs{background:#E6F0FF;color:#1A4080}
.mc-photo-wrap{position:absolute;bottom:-24px;left:16px}
.mc-photo{width:66px;height:66px;border-radius:50%;border:3px solid white;overflow:hidden;box-shadow:0 2px 10px rgba(0,0,0,0.14);background:var(--bd);display:flex;align-items:center;justify-content:center}
.mc-photo img{width:100%;height:100%;object-fit:cover}
.mc-photo-fb{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:white}
.mc-body{padding:32px 16px 14px}
.mc-name{font-family:'Cormorant Garamond',serif;font-size:16.5px;font-weight:700;color:var(--ink);margin-bottom:2px;line-height:1.2}
.mc-title{font-size:11.5px;color:var(--inks);margin-bottom:11px;line-height:1.4}
.mc-meta{display:flex;flex-direction:column;gap:4px;margin-bottom:11px}
.mc-row{display:flex;align-items:center;gap:6px;font-size:12px;color:var(--inkm)}
.mc-ic{font-size:11px;opacity:0.55;width:14px;text-align:center;flex-shrink:0}
.mc-tags{display:flex;flex-wrap:wrap;gap:4px;margin-bottom:13px}
.tag{font-size:10px;padding:2px 8px;background:var(--sf-p);color:var(--sf);border-radius:20px;font-weight:600}
.mc-acts{display:flex;gap:6px;border-top:1px solid var(--bds);padding-top:12px}
.mca{flex:1;padding:7px;border-radius:8px;font-size:11.5px;font-weight:700;cursor:pointer;font-family:'Nunito',sans-serif;transition:all 0.16s;text-align:center}
.mca-o{background:white;border:1.5px solid var(--bd);color:var(--inkm)}
.mca-o:hover{border-color:var(--sf);color:var(--sf)}
.mca-p{background:var(--sf);color:white;border:none}
.mca-p:hover{background:#C8501F}

/* ── LIST VIEW ─────────────────────────────────────── */
.list-view{display:none;background:white;border:1px solid var(--bd);border-radius:var(--r);overflow:hidden}
.dir-tbl{width:100%;border-collapse:collapse}
.dir-tbl th{font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.6px;color:var(--sf);padding:11px 15px;text-align:left;background:var(--sf-p);border-bottom:1.5px solid var(--bd)}
.dir-tbl td{padding:11px 15px;font-size:13px;color:var(--ink);border-bottom:1px solid var(--bds)}
.dir-tbl tr:last-child td{border-bottom:none}
.dir-tbl tr:hover td{background:var(--cream)}

/* ── BIZ GRID ─────────────────────────────────────── */
.biz-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.biz-card{background:white;border:1px solid var(--bd);border-radius:var(--rl);overflow:hidden;transition:all 0.22s;cursor:pointer}
.biz-card:hover{border-color:var(--sf);box-shadow:0 8px 24px rgba(232,98,42,0.1);transform:translateY(-3px)}
.biz-ban{height:60px}
.biz-body{padding:18px 16px 14px}
.biz-ic{width:50px;height:50px;border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:22px;margin-top:-38px;border:3px solid white;margin-bottom:11px;box-shadow:0 2px 8px rgba(0,0,0,0.1)}
.biz-name{font-family:'Cormorant Garamond',serif;font-size:16px;font-weight:700;color:var(--ink);margin-bottom:2px}
.biz-type{font-size:11.5px;color:var(--inks);margin-bottom:7px}
.biz-meta{font-size:12px;color:var(--inkm);margin-bottom:7px}
.biz-award{font-size:10.5px;background:var(--gd-p);color:var(--gd);padding:3px 9px;border-radius:20px;display:inline-block;font-weight:600;margin-bottom:12px}
.biz-acts{display:flex;gap:6px}

/* ── EVENTS ───────────────────────────────────────── */
.ev-list{display:flex;flex-direction:column;gap:13px}
.ev-card{background:white;border:1px solid var(--bd);border-radius:var(--rl);overflow:hidden;display:flex;cursor:pointer;transition:all 0.22s}
.ev-card:hover{border-color:var(--sf);box-shadow:0 6px 22px rgba(232,98,42,0.1);transform:translateY(-2px)}
.ev-date{display:flex;flex-direction:column;align-items:center;justify-content:center;min-width:78px;padding:18px 0}
.ev-day{font-family:'Cormorant Garamond',serif;font-size:32px;font-weight:700;color:white;line-height:1}
.ev-mon{font-size:11px;text-transform:uppercase;letter-spacing:0.5px;color:rgba(255,255,255,0.85);margin-top:2px}
.ev-info{padding:16px 18px;flex:1}
.ev-info h4{font-family:'Cormorant Garamond',serif;font-size:17px;font-weight:700;color:var(--ink);margin-bottom:4px}
.ev-info p{font-size:12.5px;color:var(--inks);line-height:1.6;margin-bottom:9px}
.ev-meta{display:flex;align-items:center;gap:14px;flex-wrap:wrap}
.ev-tag{font-size:11px;padding:3px 10px;border-radius:20px;font-weight:700;color:white}
.ev-loc{font-size:12px;color:var(--inks);display:flex;align-items:center;gap:4px}
.ev-arrow{display:flex;align-items:center;padding:0 16px;font-size:12px;font-weight:700;color:var(--sf);gap:4px;flex-shrink:0}

/* ── MATRI ────────────────────────────────────────── */
.mat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.mat-card{background:white;border:1px solid var(--bd);border-radius:var(--rl);padding:22px 18px;text-align:center;transition:all 0.22s;cursor:pointer}
.mat-card:hover{border-color:var(--sf);box-shadow:0 6px 22px rgba(232,98,42,0.1);transform:translateY(-3px)}
.mat-photo{width:76px;height:76px;border-radius:50%;margin:0 auto 13px;overflow:hidden;border:3px solid var(--bd);box-shadow:0 2px 8px rgba(0,0,0,0.08)}
.mat-photo img{width:100%;height:100%;object-fit:cover}
.mat-name{font-family:'Cormorant Garamond',serif;font-size:17px;font-weight:700;margin-bottom:3px}
.mat-sub{font-size:12px;color:var(--inks);margin-bottom:11px}
.mat-det{font-size:12.5px;color:var(--inkm);margin-bottom:4px}

/* ── ABOUT ────────────────────────────────────────── */
.ab-hero{background:linear-gradient(135deg,var(--gn),var(--gn-l),var(--sf));border-radius:var(--rl);padding:40px;color:white;margin-bottom:22px;text-align:center}
.ab-hero h2{font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:700;margin-bottom:10px}
.ab-hero p{font-size:14.5px;line-height:1.8;opacity:0.92;margin-bottom:22px}
.ab-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.ab-stat .big{font-family:'Cormorant Garamond',serif;font-size:34px;font-weight:700}
.ab-stat .lbl{font-size:11px;opacity:0.76;text-transform:uppercase;letter-spacing:0.5px;margin-top:2px}
.ab-sec{background:white;border:1px solid var(--bd);border-radius:var(--r);padding:24px;margin-bottom:14px}
.ab-sec h3{font-family:'Cormorant Garamond',serif;font-size:21px;font-weight:700;color:var(--sf);margin-bottom:11px;display:flex;align-items:center;gap:9px}
.ab-sec h3::before{content:'';width:3px;height:20px;background:var(--sf);border-radius:2px;flex-shrink:0}
.ab-sec p,.ab-sec li{font-size:14px;line-height:1.8;color:var(--inkm);margin-bottom:7px}
.ab-sec ul{margin-left:18px}

/* ── STICKY BOTTOM STATS ──────────────────────────── */
.stats-bar{position:fixed;bottom:0;left:0;right:0;z-index:400;background:rgba(28,20,16,0.97);backdrop-filter:blur(12px);border-top:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;height:54px;box-shadow:0 -4px 24px rgba(0,0,0,0.28);overflow:hidden}
.si{display:flex;align-items:center;gap:11px;padding:0 26px;border-right:1px solid rgba(255,255,255,0.08);height:100%;flex-shrink:0}
.si:last-child{border-right:none}
.si-num{font-family:'Cormorant Garamond',serif;font-size:21px;font-weight:700;color:#F28C5E;line-height:1}
.si-lbl{font-size:10.5px;color:rgba(255,255,255,0.55);text-transform:uppercase;letter-spacing:0.5px;font-weight:600}

/* ── FOOTER ───────────────────────────────────────── */
.site-footer{background:linear-gradient(180deg,#1A1008 0%,#0E0A04 100%);color:rgba(255,255,255,0.8);margin-bottom:54px;/* leave room for sticky bar */border-top:1px solid rgba(255,255,255,0.06)}

.footer-top{max-width:1280px;margin:0 auto;display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:48px;padding:52px 32px 40px}

.footer-brand h3{font-family:'Cormorant Garamond',serif;font-size:22px;font-weight:700;color:#fff;margin-bottom:12px;display:flex;align-items:center;gap:8px}
.footer-brand p{font-size:13.5px;line-height:1.85;color:rgba(255,255,255,0.55);margin-bottom:22px;font-weight:400;max-width:280px}

.footer-socials{display:flex;gap:9px}
.social-btn{width:36px;height:36px;border-radius:9px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.1);display:flex;align-items:center;justify-content:center;font-size:16px;cursor:pointer;transition:all 0.2s;text-decoration:none;color:white}
.social-btn:hover{background:var(--sf);border-color:var(--sf);transform:translateY(-2px);box-shadow:0 4px 12px rgba(232,98,42,0.3)}

.footer-col h4{font-family:'Cormorant Garamond',serif;font-size:14px;font-weight:700;color:#fff;text-transform:uppercase;letter-spacing:1.2px;margin-bottom:18px;padding-bottom:10px;border-bottom:1px solid rgba(255,255,255,0.08)}
.footer-col a{display:block;font-size:13px;color:rgba(255,255,255,0.52);margin-bottom:10px;cursor:pointer;transition:all 0.16s;text-decoration:none;font-weight:500;line-height:1.4}
.footer-col a:hover{color:var(--sf-l);padding-left:4px}

.footer-stats{max-width:1280px;margin:0 auto;display:grid;grid-template-columns:repeat(8,1fr);gap:0;border-top:1px solid rgba(255,255,255,0.07);border-bottom:1px solid rgba(255,255,255,0.07);padding:0 32px}
.f-stat{padding:22px 0;text-align:center;border-right:1px solid rgba(255,255,255,0.06)}
.f-stat:last-child{border-right:none}
.f-num{font-family:'Cormorant Garamond',serif;font-size:26px;font-weight:700;color:#F8D87A;line-height:1;margin-bottom:4px}
.f-lbl{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.8px;color:rgba(255,255,255,0.38)}

.footer-bottom{max-width:1280px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;padding:20px 32px 24px;flex-wrap:wrap;gap:12px}
.footer-bottom p{font-size:12.5px;color:rgba(255,255,255,0.35);font-weight:500;line-height:1.5}
.footer-bottom-links{display:flex;gap:4px;align-items:center}
.footer-bottom-links a{font-size:12px;color:rgba(255,255,255,0.35);cursor:pointer;transition:color 0.16s;text-decoration:none;padding:4px 10px;border-radius:6px;font-weight:600}
.footer-bottom-links a:hover{color:var(--sf-l);background:rgba(255,255,255,0.05)}
.footer-bottom-links a+a::before{content:'·';color:rgba(255,255,255,0.15);margin-right:4px}

/* ── MODALS BASE ──────────────────────────────────── */
.overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.72);z-index:600;align-items:center;justify-content:center;padding:20px;overflow-y:auto;backdrop-filter:blur(4px)}
.overlay.open{display:flex}
.modal{background:white;border-radius:var(--rl);width:100%;position:relative;animation:pop 0.26s cubic-bezier(0.34,1.28,0.64,1) both}
@keyframes pop{from{opacity:0;transform:scale(0.93) translateY(14px)}to{opacity:1;transform:scale(1) translateY(0)}}
.mcl{position:absolute;top:13px;right:13px;z-index:10;width:33px;height:33px;border-radius:50%;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700;transition:all 0.16s}
.mcl-w{background:rgba(255,255,255,0.24);color:white}.mcl-w:hover{background:rgba(255,255,255,0.4)}
.mcl-d{background:var(--bds);color:var(--ink)}.mcl-d:hover{background:var(--bd)}

/* ── MEMBER MODAL ─────────────────────────────────── */
#memberModal .modal{max-width:820px;max-height:88vh;overflow-y:auto}
.mdl-ban{height:124px;position:relative;border-radius:var(--rl) var(--rl) 0 0;overflow:hidden}
.mdl-ban-pat{position:absolute;inset:0;opacity:0.1;background:repeating-linear-gradient(45deg,white 0,white 1px,transparent 0,transparent 50%);background-size:14px 14px}
.mdl-top{display:flex;align-items:flex-end;gap:16px;padding:0 26px;margin-top:-40px;position:relative;z-index:2}
.mdl-av{width:106px;height:106px;border-radius:50%;border:4px solid white;overflow:hidden;flex-shrink:0;box-shadow:0 4px 16px rgba(0,0,0,0.16);background:var(--bd)}
.mdl-av img{width:100%;height:100%;object-fit:cover}
.mdl-av-fb{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:40px;font-weight:700;color:white}
.mdl-nb{padding-bottom:11px;flex:1}
.mdl-name{font-family:'Cormorant Garamond',serif;font-size:25px;font-weight:700;color:var(--ink)}
.mdl-sub{font-size:13px;color:var(--inkm);margin-top:3px}
.mdl-body{padding:20px 26px 26px}
.dtabs{display:flex;border-bottom:2px solid var(--bd);margin-bottom:20px}
.dtab{padding:9px 16px;font-size:12px;font-weight:700;color:var(--inks);cursor:pointer;border-bottom:3px solid transparent;margin-bottom:-2px;text-transform:uppercase;letter-spacing:0.5px;transition:all 0.16s;background:none;border-top:none;border-left:none;border-right:none;font-family:'Nunito',sans-serif;white-space:nowrap}
.dtab:hover{color:var(--sf)}
.dtab.active{color:var(--sf);border-bottom-color:var(--sf)}
.dtab-pane{display:none}
.dtab-pane.active{display:block}
.igrid{display:grid;grid-template-columns:1fr 1fr;gap:11px;margin-bottom:18px}
.ib{background:var(--cream);border:1px solid var(--bds);border-radius:9px;padding:13px}
.ib .lbl{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.7px;color:var(--inks);margin-bottom:4px}
.ib .val{font-size:13.5px;color:var(--ink);font-weight:500}
.ib .val a{color:var(--sf);text-decoration:none;font-weight:600}
.ib .val a:hover{text-decoration:underline}
.sec-lbl{font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.7px;color:var(--sf);margin:16px 0 11px;display:flex;align-items:center;gap:7px}
.sec-lbl::after{content:'';flex:1;height:1px;background:var(--bd)}
.fam-wrap{display:flex;flex-wrap:wrap;gap:9px}
.fam-chip{background:var(--cream);border:1px solid var(--bd);border-radius:9px;padding:9px 13px;display:flex;align-items:center;gap:9px}
.fam-ic{width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:white;flex-shrink:0}
.fam-n{font-size:13px;font-weight:600;color:var(--ink)}
.fam-r{font-size:11px;color:var(--inks)}
.gal3{display:grid;grid-template-columns:repeat(3,1fr);gap:7px}
.gi{aspect-ratio:1;border-radius:8px;overflow:hidden;cursor:pointer;transition:transform 0.18s;display:flex;align-items:center;justify-content:center;font-size:34px}
.gi:hover{transform:scale(1.04)}
.mdl-acts{display:flex;gap:9px;flex-wrap:wrap;margin-top:4px}
.mbtn{padding:9px 20px;border-radius:8px;font-size:13px;font-weight:700;cursor:pointer;font-family:'Nunito',sans-serif;transition:all 0.16s}
.mbtn-p{background:var(--sf);color:white;border:none}.mbtn-p:hover{background:#C8501F}
.mbtn-o{background:white;color:var(--sf);border:2px solid var(--sf)}.mbtn-o:hover{background:var(--sf-p)}

/* ── EVENT MODAL ──────────────────────────────────── */
#eventModal .modal{max-width:880px;max-height:90vh;overflow-y:auto}
.evm-ban{height:210px;position:relative;border-radius:var(--rl) var(--rl) 0 0;overflow:hidden;display:flex;align-items:flex-end}
.evm-ban img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.evm-ban-ov{position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,0.78) 0%,rgba(0,0,0,0.08) 60%)}
.evm-ban-txt{position:relative;z-index:1;padding:20px 26px;width:100%}
.evm-ban-txt h2{font-family:'Cormorant Garamond',serif;font-size:28px;font-weight:700;color:white;margin-bottom:5px}
.ev-chip{display:inline-flex;align-items:center;gap:5px;background:rgba(255,255,255,0.18);border:1px solid rgba(255,255,255,0.3);color:white;border-radius:20px;padding:4px 11px;font-size:11.5px;font-weight:600}
.evm-body{padding:22px 26px 26px}
.evtabs{display:flex;border-bottom:2px solid var(--bd);margin-bottom:20px}
.evtab{padding:9px 15px;font-size:12px;font-weight:700;color:var(--inks);cursor:pointer;border-bottom:3px solid transparent;margin-bottom:-2px;text-transform:uppercase;letter-spacing:0.5px;transition:all 0.16s;background:none;border-top:none;border-left:none;border-right:none;font-family:'Nunito',sans-serif}
.evtab:hover{color:var(--sf)}.evtab.active{color:var(--sf);border-bottom-color:var(--sf)}
.ev-pane{display:none}.ev-pane.active{display:block}
.ev3grid{display:grid;grid-template-columns:repeat(3,1fr);gap:11px;margin-bottom:18px}
.ev3b{background:var(--cream);border:1px solid var(--bds);border-radius:9px;padding:14px;text-align:center}
.ev3b .eic{font-size:22px;margin-bottom:5px}
.ev3b .el{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.6px;color:var(--inks);margin-bottom:3px}
.ev3b .ev{font-size:13.5px;font-weight:600;color:var(--ink)}
.ev-desc{font-size:14px;line-height:1.8;color:var(--inkm);margin-bottom:18px}
.ev-vid{border-radius:10px;overflow:hidden;background:#111;aspect-ratio:16/9;display:flex;align-items:center;justify-content:center;position:relative;cursor:pointer;margin-bottom:14px}
.ev-vid-th{position:absolute;inset:0;background:linear-gradient(135deg,#1C1410,#3D2010);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:10px}
.ev-play{width:62px;height:62px;border-radius:50%;background:rgba(255,255,255,0.18);border:2px solid rgba(255,255,255,0.45);display:flex;align-items:center;justify-content:center;font-size:22px;transition:all 0.18s}
.ev-vid:hover .ev-play{background:var(--sf);border-color:var(--sf);transform:scale(1.06)}
.ev-vid-t{color:rgba(255,255,255,0.8);font-size:13px;font-weight:600}
.ev4grid{display:grid;grid-template-columns:repeat(4,1fr);gap:8px}
.ev-gi{aspect-ratio:1;border-radius:8px;overflow:hidden;cursor:pointer;transition:all 0.18s;position:relative}
.ev-gi:hover{transform:scale(1.04);box-shadow:0 4px 16px rgba(0,0,0,0.2)}
.ev-gi img{width:100%;height:100%;object-fit:cover;display:block}
.ev-gi-em{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:30px}
.ev-map{border-radius:10px;overflow:hidden;height:196px;background:linear-gradient(135deg,#E8F4FD,#D0EBF5);display:flex;align-items:center;justify-content:center;border:1px solid var(--bd)}
.ev-map-ph{text-align:center}
.ev-map-ph .mi{font-size:46px;margin-bottom:7px}
.ev-map-ph p{font-size:13px;color:var(--inks);font-weight:600;margin-bottom:3px}
.ev-map-ph small{font-size:11px;color:var(--inkf)}

/* ── ADD PROFILE MODAL ────────────────────────────── */
#addProfileModal .modal{max-width:600px;max-height:88vh;overflow-y:auto}
.ap-hdr{background:linear-gradient(135deg,var(--sf),var(--sf-l));padding:24px 26px;border-radius:var(--rl) var(--rl) 0 0;position:relative}
.ap-hdr h2{font-family:'Cormorant Garamond',serif;font-size:24px;font-weight:700;color:white;margin-bottom:3px}
.ap-hdr p{font-size:13px;color:rgba(255,255,255,0.86)}
.ap-body{padding:24px 26px 0}
.fgrp{margin-bottom:15px}
.fgrp label{display:block;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.6px;color:var(--inkm);margin-bottom:5px}
.fgrp input,.fgrp select,.fgrp textarea{width:100%;padding:10px 12px;border:1.5px solid var(--bd);border-radius:8px;font-family:'Nunito',sans-serif;font-size:13px;color:var(--ink);outline:none;transition:all 0.18s;background:white}
.fgrp input:focus,.fgrp select:focus,.fgrp textarea:focus{border-color:var(--sf);box-shadow:0 0 0 3px rgba(232,98,42,0.09)}
.fgrp textarea{resize:vertical;min-height:76px}
.f2{display:grid;grid-template-columns:1fr 1fr;gap:11px}
.fsec{font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:0.7px;color:var(--sf);margin:18px 0 11px;display:flex;align-items:center;gap:7px}
.fsec::after{content:'';flex:1;height:1px;background:var(--bd)}
.ap-foot{display:flex;gap:9px;padding:20px 26px 24px}
.ap-cancel{flex:1;padding:11px;border:1.5px solid var(--bd);background:white;border-radius:8px;font-family:'Nunito',sans-serif;font-size:13px;font-weight:700;color:var(--inkm);cursor:pointer;transition:all 0.16s}
.ap-cancel:hover{border-color:var(--sf);color:var(--sf)}
.ap-submit{flex:2;padding:11px;border:none;border-radius:8px;font-family:'Nunito',sans-serif;font-size:13px;font-weight:700;color:white;cursor:pointer;background:linear-gradient(135deg,var(--sf),var(--sf-l));transition:all 0.16s}
.ap-submit:hover{box-shadow:0 4px 16px rgba(232,98,42,0.34);transform:translateY(-1px)}

/* ── FULLSCREEN GALLERY ───────────────────────────── */
#galOv{display:none;position:fixed;inset:0;background:rgba(0,0,0,0.96);z-index:900;flex-direction:column;align-items:center;justify-content:center}
#galOv.open{display:flex}
.gal-img{max-width:88vw;max-height:74vh;object-fit:contain;border-radius:8px;display:block}
.gal-em{font-size:110px;line-height:1}
.gal-ctrl{display:flex;align-items:center;gap:18px;margin-top:22px}
.gal-btn{width:46px;height:46px;border-radius:50%;background:rgba(255,255,255,0.11);border:1px solid rgba(255,255,255,0.22);color:white;font-size:19px;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.16s}
.gal-btn:hover{background:var(--sf);border-color:var(--sf)}
.gal-cnt{font-size:13px;color:rgba(255,255,255,0.55);min-width:56px;text-align:center}
.gal-close{position:absolute;top:18px;right:18px;width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,0.14);border:1px solid rgba(255,255,255,0.28);color:white;font-size:16px;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.16s}
.gal-close:hover{background:var(--sf)}
.gal-cap{font-size:12px;color:rgba(255,255,255,0.45);margin-top:10px}

/* ── TOAST ────────────────────────────────────────── */
.toast{position:fixed;bottom:68px;left:50%;transform:translateX(-50%) translateY(18px);background:var(--gn);color:white;padding:11px 20px;border-radius:9px;font-size:13px;font-weight:600;z-index:999;box-shadow:0 4px 20px rgba(0,0,0,0.22);opacity:0;transition:all 0.28s;pointer-events:none;white-space:nowrap}
.toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* ── HAMBURGER BUTTON ─────────────────────────────── */
.mob-menu-btn{display:none;flex-direction:column;justify-content:center;align-items:center;width:40px;height:40px;border:1.5px solid var(--bd);border-radius:9px;background:white;cursor:pointer;gap:5px;flex-shrink:0;transition:all 0.2s}
.mob-menu-btn span{display:block;width:18px;height:2px;background:var(--inkm);border-radius:2px;transition:all 0.26s}
.mob-menu-btn.open span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.mob-menu-btn.open span:nth-child(2){opacity:0;transform:scaleX(0)}
.mob-menu-btn.open span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.mob-menu-btn:hover{border-color:var(--sf)}

/* ── MOBILE DRAWER ────────────────────────────────── */
.mob-drawer{display:none;position:fixed;inset:0;z-index:490;pointer-events:none}
.mob-drawer.open{pointer-events:all}
.mob-drawer-overlay{position:absolute;inset:0;background:rgba(0,0,0,0);transition:background 0.3s}
.mob-drawer.open .mob-drawer-overlay{background:rgba(0,0,0,0.48)}
.mob-drawer-panel{position:absolute;top:0;right:0;width:min(320px,88vw);height:100%;background:white;box-shadow:-8px 0 40px rgba(0,0,0,0.18);transform:translateX(100%);transition:transform 0.3s cubic-bezier(0.4,0,0.2,1);display:flex;flex-direction:column;overflow-y:auto}
.mob-drawer.open .mob-drawer-panel{transform:translateX(0)}
.mob-drawer-head{padding:18px 20px 14px;border-bottom:1px solid var(--bds);display:flex;align-items:center;justify-content:space-between;flex-shrink:0}
.mob-drawer-head .logo-txt{font-family:'Cormorant Garamond',serif;font-size:16px;font-weight:700;color:var(--ink)}
.mob-drawer-head .logo-txt small{display:block;font-size:10px;font-family:'Nunito',sans-serif;font-weight:600;color:var(--inks);letter-spacing:0.6px;text-transform:uppercase}
.mob-drawer-close{width:32px;height:32px;border-radius:8px;background:var(--bds);border:none;cursor:pointer;font-size:15px;color:var(--inkm);display:flex;align-items:center;justify-content:center}
.mob-drawer-srch{padding:14px 20px;border-bottom:1px solid var(--bds)}
.mob-drawer-srch .srch-wrap{display:flex;align-items:center;background:var(--cream);border:1.5px solid var(--bd);border-radius:9px;padding:0 12px;gap:8px}
.mob-drawer-srch .srch-wrap:focus-within{border-color:var(--sf);background:white}
.mob-drawer-srch input{border:none;outline:none;background:transparent;font-size:13px;font-family:'Nunito',sans-serif;color:var(--ink);width:100%;padding:9px 0}
.mob-nav-links{padding:10px 12px;flex:1}
.mob-nav-btn{width:100%;display:flex;align-items:center;gap:12px;padding:13px 14px;border-radius:10px;font-size:14px;font-weight:600;color:var(--inkm);cursor:pointer;border:none;background:transparent;font-family:'Nunito',sans-serif;text-align:left;transition:all 0.16s;margin-bottom:3px}
.mob-nav-btn .mnb-ic{font-size:17px;width:24px;text-align:center;flex-shrink:0}
.mob-nav-btn:hover,.mob-nav-btn.active{background:var(--sf-p);color:var(--sf)}
.mob-drawer-foot{padding:16px 20px 24px;border-top:1px solid var(--bds);display:flex;flex-direction:column;gap:9px;flex-shrink:0}
.mob-btn-add{padding:12px;border:1.5px solid var(--bd);background:white;border-radius:10px;font-family:'Nunito',sans-serif;font-size:13px;font-weight:700;color:var(--inkm);cursor:pointer;transition:all 0.16s;width:100%}
.mob-btn-add:hover{border-color:var(--sf);color:var(--sf)}
.mob-btn-join{padding:13px;border:none;border-radius:10px;font-family:'Nunito',sans-serif;font-size:13px;font-weight:700;color:white;cursor:pointer;background:linear-gradient(135deg,var(--sf),var(--sf-l));box-shadow:0 3px 12px rgba(232,98,42,0.32);width:100%;transition:all 0.16s}
.mob-btn-join:hover{box-shadow:0 5px 18px rgba(232,98,42,0.42)}

/* ── MOBILE SEARCH BAR (below nav) ───────────────── */
.mob-search-bar{display:none;padding:10px 14px;background:white;border-bottom:1px solid var(--bd)}
.mob-search-bar .srch-inner{display:flex;align-items:center;background:var(--cream);border:1.5px solid var(--bd);border-radius:9px;padding:0 12px;gap:8px}
.mob-search-bar .srch-inner:focus-within{border-color:var(--sf);background:white}
.mob-search-bar input{border:none;outline:none;background:transparent;font-size:14px;font-family:'Nunito',sans-serif;color:var(--ink);width:100%;padding:10px 0}

/* ── BOTTOM TAB BAR (mobile) ─────────────────────── */
.mob-tab-bar{display:none;position:fixed;bottom:0;left:0;right:0;z-index:410;background:white;border-top:1px solid var(--bd);box-shadow:0 -2px 16px rgba(0,0,0,0.09)}
.mob-tab-bar-inner{display:flex;align-items:stretch}
.mob-tab-item{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:7px 2px 6px;cursor:pointer;border:none;background:transparent;font-family:'Nunito',sans-serif;gap:3px;transition:all 0.16s;border-top:2px solid transparent}
.mob-tab-item .mt-ic{font-size:18px;line-height:1}
.mob-tab-item .mt-lbl{font-size:9.5px;font-weight:700;color:var(--inks);text-transform:uppercase;letter-spacing:0.3px}
.mob-tab-item.active{border-top-color:var(--sf)}
.mob-tab-item.active .mt-lbl{color:var(--sf)}

/* ── RESPONSIVE ───────────────────────────────────── */
@media(max-width:1100px){
  .footer-top{grid-template-columns:1fr 1fr;gap:32px}
  .footer-stats{grid-template-columns:repeat(4,1fr)}
  .f-stat:nth-child(4){border-right:none}
  .f-stat:nth-child(n+5){border-top:1px solid rgba(255,255,255,0.06)}
}
@media(max-width:1060px){.mem-grid,.biz-grid,.mat-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:820px){
  /* Hide desktop nav elements */
  .nav-links{display:none!important}
  .nav-srch{display:none!important}
  .nav-acts{display:none!important}
  .mob-menu-btn{display:flex}
  .mob-drawer{display:block}
  .mob-search-bar{display:block}
  .mob-tab-bar{display:block}
  /* Stats bar hidden on mobile — replaced by bottom tab bar */
  .stats-bar{display:none}
  /* Layout */
  .layout{grid-template-columns:1fr}
  .sidebar{position:static;display:none!important}
  .topnav-inner{padding:0 14px;justify-content:space-between}
  .nav-logo{margin-right:0}
  .hero{padding:28px 16px 22px}
  .hero h1{font-size:30px}
  .hero p{font-size:14px}
  .page-wrap{padding:14px 14px 80px}
  .ev3grid{grid-template-columns:1fr 1fr}
  .ev4grid{grid-template-columns:repeat(3,1fr)}
  /* Footer */
  .footer-top{grid-template-columns:1fr 1fr;gap:24px;padding:36px 20px 28px}
  .footer-stats{grid-template-columns:repeat(4,1fr);padding:0 20px}
  .footer-bottom{padding:16px 20px 20px}
  .site-footer{margin-bottom:54px}
}
@media(max-width:600px){
  .mem-grid,.biz-grid,.mat-grid{grid-template-columns:1fr 1fr}
  .footer-top{grid-template-columns:1fr;gap:20px;padding:28px 18px 22px}
  .footer-stats{grid-template-columns:repeat(2,1fr)}
  .f-stat:nth-child(2n){border-right:none}
  .f-stat:nth-child(n+3){border-top:1px solid rgba(255,255,255,0.06)}
  .footer-bottom{flex-direction:column;align-items:flex-start;gap:8px;padding:14px 18px 18px}
  .footer-bottom-links{flex-wrap:wrap}
}
@media(max-width:480px){
  .mem-grid,.biz-grid,.mat-grid{grid-template-columns:1fr}
  .igrid,.f2{grid-template-columns:1fr}
  .hero h1{font-size:26px}
  .ev4grid{grid-template-columns:repeat(2,1fr)}
  .ab-grid{grid-template-columns:repeat(2,1fr)}
  .evm-ban{height:150px}.evm-ban-txt h2{font-size:20px}
  .chdr{flex-direction:column;align-items:flex-start}
  .announce{flex-direction:column;gap:7px}
  .mat-grid{grid-template-columns:1fr 1fr}
}


/* ── OBITUARY / TRIBUTE ───────────────────────────── */

.obituary-section{
  margin-top:26px;
}

.obituary-grid{
  display:grid;
  grid-template-columns:1fr;
  gap:14px;
}

.obituary-card{
  background:linear-gradient(135deg,#fff,#FBF7F1);
  border:1px solid var(--bd);
  border-left:4px solid var(--gd-l);
  border-radius:var(--rl);
  padding:18px;
  display:flex;
  gap:18px;
  transition:all .22s;
}

.obituary-card:hover{
  border-color:var(--gd-l);
  box-shadow:0 7px 24px rgba(184,130,10,.10);
  transform:translateY(-2px);
}

.obituary-photo{
  width:92px;
  height:92px;
  border-radius:50%;
  overflow:hidden;
  flex-shrink:0;
  border:3px solid white;
  box-shadow:0 2px 10px rgba(0,0,0,.14);
  background:var(--bd);
}

.obituary-photo img{
  width:100%;
  height:100%;
  object-fit:cover;
  filter:grayscale(100%);
}

.obituary-content{
  flex:1;
  min-width:0;
}

.obituary-date{
  font-size:10.5px;
  color:var(--gd);
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.5px;
  margin-bottom:4px;
}

.obituary-content h3{
  font-family:'Cormorant Garamond',serif;
  font-size:21px;
  font-weight:700;
  color:var(--ink);
  margin-bottom:2px;
}

.obituary-family{
  font-size:11.5px;
  color:var(--inks);
  margin-bottom:9px;
}

.obituary-message{
  font-family:'Cormorant Garamond',serif;
  font-size:15px;
  font-style:italic;
  line-height:1.65;
  color:var(--inkm);
  max-width:780px;
  margin-bottom:11px;
}

.obituary-footer{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:10px;
  border-top:1px solid var(--bds);
  padding-top:10px;
}

.obituary-footer span{
  font-size:11.5px;
  color:var(--gd);
  font-weight:700;
}

.obituary-footer button{
  border:none;
  background:transparent;
  color:var(--sf);
  font-family:'Nunito',sans-serif;
  font-size:11.5px;
  font-weight:700;
  cursor:pointer;
}

.obituary-footer button:hover{
  text-decoration:underline;
}

@media(max-width:600px){

  .obituary-card{
    padding:15px;
    gap:13px;
  }

  .obituary-photo{
    width:68px;
    height:68px;
  }

  .obituary-content h3{
    font-size:17px;
  }

  .obituary-message{
    font-size:14px;
  }

}
</style>
</head>
<body>

<!-- ── TOP TICKER ──────────────────────────────────── -->
<div class="top-ticker">
  <div class="ticker-inner" id="tickerInner"></div>
</div>

<!-- TOP NAV -->
<nav class="topnav">
  <div class="topnav-inner">
    <a class="nav-logo" onclick="showTab('directory',document.querySelector('.nav-btn'))">
      <div class="nav-logo-icon">🇮🇳</div>
      <div class="nav-logo-txt">NAGAR BRAHMIN<small>Community Directory</small></div>
    </a>
    <div class="nav-links">
      <button class="nav-btn active" onclick="showTab('directory',this)">Members</button>
      <button class="nav-btn" onclick="showTab('business',this)">Businesses</button>
      <button class="nav-btn" onclick="showTab('events',this)">Events</button>
      <button class="nav-btn" onclick="showTab('matrimonial',this)">Matrimonial</button>
      <button class="nav-btn" onclick="showTab('obituary',this)">Obituary</button>
      <button class="nav-btn" onclick="showTab('about',this)">About</button>
    </div>
    <div class="nav-srch">
      <span class="srch-ic">🔍</span>
      <input type="text" id="searchInput" placeholder="Search members, city, gotra…" oninput="filterMembers(this.value)">
    </div>
    <div class="nav-acts">
      <button class="btn-ghost" onclick="openAddProfile()">+ Add Profile</button>
      <button class="btn-cta" onclick="showToast('WhatsApp link copied!')">Join Community</button>
    </div>
    <button class="mob-menu-btn" id="mobMenuBtn" onclick="toggleMobDrawer()" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Mobile search bar -->
<div class="mob-search-bar">
  <div class="srch-inner">
    <span style="font-size:14px;opacity:0.45">🔍</span>
    <input type="text" id="mobSearchInput" placeholder="Search members, city, gotra…" oninput="filterMembers(this.value)">
  </div>
</div>

<!-- Mobile Drawer -->
<div class="mob-drawer" id="mobDrawer">
  <div class="mob-drawer-overlay" onclick="closeMobDrawer()"></div>
  <div class="mob-drawer-panel">
    <div class="mob-drawer-head">
      <div class="logo-txt">NAGAR BRAHMIN <small>Community Directory</small></div>
      <button class="mob-drawer-close" onclick="closeMobDrawer()">✕</button>
    </div>
    <div class="mob-nav-links">
      <button class="mob-nav-btn active" id="mnb-directory" onclick="mobNav('directory')"><span class="mnb-ic">👥</span> Members</button>
      <button class="mob-nav-btn" id="mnb-business" onclick="mobNav('business')"><span class="mnb-ic">🏢</span> Businesses</button>
      <button class="mob-nav-btn" id="mnb-events" onclick="mobNav('events')"><span class="mnb-ic">🎊</span> Events</button>
      <button class="mob-nav-btn" id="mnb-matrimonial" onclick="mobNav('matrimonial')"><span class="mnb-ic">💍</span> Matrimonial</button>
      <button class="mob-nav-btn" id="mnb-obituary" onclick="mobNav('obituary')"><span class="mnb-ic">💍</span> Obituary</button>

      <button class="mob-nav-btn" id="mnb-about" onclick="mobNav('about')"><span class="mnb-ic">ℹ️</span> About Us</button>
    </div>
    <div class="mob-drawer-foot">
      <button class="mob-btn-add" onclick="closeMobDrawer();openAddProfile()">+ Add Family Profile</button>
      <button class="mob-btn-join" onclick="closeMobDrawer();showToast('WhatsApp link copied! 💬')">💬 Join Community WhatsApp</button>
    </div>
  </div>
</div>

<!-- Mobile Bottom Tab Bar -->
<div class="mob-tab-bar">
  <div class="mob-tab-bar-inner">
    <button class="mob-tab-item active" id="mtab-directory" onclick="mobNav('directory')">
      <span class="mt-ic">👥</span><span class="mt-lbl">Members</span>
    </button>
    <button class="mob-tab-item" id="mtab-business" onclick="mobNav('business')">
      <span class="mt-ic">🏢</span><span class="mt-lbl">Business</span>
    </button>
    <button class="mob-tab-item" id="mtab-events" onclick="mobNav('events')">
      <span class="mt-ic">🎊</span><span class="mt-lbl">Events</span>
    </button>
    <button class="mob-tab-item" id="mtab-matrimonial" onclick="mobNav('matrimonial')">
      <span class="mt-ic">💍</span><span class="mt-lbl">Matrimony</span>
    </button>
    <button class="mob-tab-item" id="mtab-obituary" onclick="mobNav('obituary')">
      <span class="mt-ic">💍</span><span class="mt-lbl">obituary</span>
    </button>
    <button class="mob-tab-item" id="mtab-about" onclick="mobNav('about')">
      <span class="mt-ic">ℹ️</span><span class="mt-lbl">About</span>
    </button>
  </div>
</div>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
    <div class="hero-badge">🏛️ Est. 2026 &bull; Gujarat, India</div>
    <h1>Our Community, <em>Our Pride</em></h1>
    <p>Connecting Nagar Brahmin families across India and the world — one trusted directory</p>
  </div>
</section>

<!-- PAGE -->
<div class="page-wrap">
  <div class="layout" id="pageLayout">

    <!-- SIDEBAR -->
    <aside class="sidebar" id="sidebarEl">
      <div class="fp">
        <div class="fp-title">City</div>
        @foreach($cityList as $city)
          <div class="fp-row">
            <input type="checkbox" id="fcity-{!! $city->id !!}" onchange="applyFilter()">
            <label for="f1">{!! $city->title !!}</label>
            @if($city->cityCount)
              <span class="fbadge">{!! $city->cityCount !!}</span>
            @endif
          </div>
        @endforeach
      </div>

      <div class="fp">
        <div class="fp-title">Profession</div>
        @foreach($professionList as $profession)
          <div class="fp-row">
            <input type="checkbox" onchange="applyFilter()"><label>{!! $profession->title !!}</label>
            @if($profession->professionCount)
              <span class="fbadge">{!! $profession->professionCount !!}</span>
            @endif
          </div>
        @endforeach
      </div>

      <div class="fp">
        <div class="fp-title">Gotra</div>
        <select class="fp-sel" onchange="applyFilter()">
          <option value="">All Gotras</option>
          <option>Kashyap</option><option>Atri</option>
          <option>Bharadwaj</option><option>Vatsa</option>
          <option>Sandilya</option><option>Garg</option>
        </select>
      </div>
      <div class="fp">
        <div class="fp-title">Member Type</div>
        <div class="fp-row"><input type="checkbox" onchange="applyFilter()"><label>Head of Family</label></div>
        <div class="fp-row"><input type="checkbox" onchange="applyFilter()"><label>Youth (18–35)</label></div>
        <div class="fp-row"><input type="checkbox" onchange="applyFilter()"><label>Senior Members</label></div>
        <div class="fp-row"><input type="checkbox" onchange="applyFilter()"><label>NRI Members</label></div>
      </div>
    </aside>

    <!-- CONTENT -->
    <div class="content-area" id="contentArea">

      <!-- DIRECTORY -->
      <div id="tab-directory">
        

        <div class="announce">
            <div class="announce-ic">🙏</div>
            <div>
              <h4>Let’s Create One Unique Brahmin Community — Registrations Open!</h4>
              <p>Let’s come together, connect every family, and bring our entire Brahmin community <strong>under one hood.</strong> Registration is <strong>FREE!</strong> <strong>Register today via WhatsApp or Call: 8000060541 →</strong></p>
            </div>
        </div>



        <div class="chdr">
          <div class="chdr-l"><h2>Member Directory</h2><p id="result-count">Showing 6 of 2,847 families</p></div>
          <div class="chdr-r">
            <select class="sort-sel"><option>Name A–Z</option><option>Recently Added</option><option>City</option></select>
            <div class="vtgl">
              <button class="vbtn active" onclick="setView('grid',this)">⊞ Grid</button>
              <button class="vbtn" onclick="setView('list',this)">☰ List</button>
            </div>
          </div>
        </div>
        <div class="mem-grid" id="membersGrid"></div>
        <div class="list-view" id="listView">
          <table class="dir-tbl">
            <thead><tr><th>Name</th><th>Profession</th><th>City</th><th>Phone</th><th>Gotra</th><th></th></tr></thead>
            <tbody id="listBody"></tbody>
          </table>
        </div>
      </div>

      <!-- BUSINESS -->
      <div id="tab-business" style="display:none">
        <div class="chdr"><div class="chdr-l"><h2>Business Directory</h2><p>142 community-owned businesses</p></div></div>
        <div class="biz-grid" id="businessGrid"></div>
      </div>

      <!-- EVENTS -->
      <div id="tab-events" style="display:none">
        <div class="chdr"><div class="chdr-l"><h2>Events & Programs</h2>
          <p>Loading soon.</p>
        </div></div>
        <div class="ev-list" id="eventsList" style="display: none;"></div>
      </div>

      <!-- MATRIMONIAL -->
      <div id="tab-matrimonial" style="display:none">
        <div class="chdr"><div class="chdr-l"><h2>Matrimonial Profiles</h2>
          <p>Loading soon.</p>
        </div></div>
        <div class="mat-grid" id="matrimonialGrid" style="display: none;"></div>
      </div>

      <div id="tab-obituary" style="display:none">
        <div class="chdr"><div class="chdr-l"><h2>Obituary</h2>
          <p>Loading soon.</p></div></div>
        <div class="ev-list">
          <!-- OBITUARY / TRIBUTE SECTION -->
          <section class="obituary-section" style="display:none;">

            <div class="chdr">
              <div class="chdr-l">
                <h2>🕊️ In Loving Memory</h2>
                <p>Remembering those who will always remain a part of our community</p>
              </div>
              <div class="chdr-r">
                <button class="btn-ghost">View All Tributes →</button>
              </div>
            </div>

            <div class="obituary-grid">

              <div class="obituary-card">

                <div class="obituary-photo">
                  <img src="https://placehold.co/150" alt="Late Shri Rajeshbhai">
                </div>

                <div class="obituary-content">

                  <div class="obituary-date">
                    <span>🕊️</span> 2 September 2026
                  </div>

                  <h3>Late Shri Rajeshbhai Harilal Shah</h3>

                  <p class="obituary-family">
                    A beloved member of our Nagar Brahmin Samaj
                  </p>

                  <p class="obituary-message">
                    “His kindness, simplicity and warm smile touched the lives
                    of everyone around him. His memories will forever remain
                    in our hearts.”
                  </p>

                  <div class="obituary-footer">
                    <span>🙏 Om Shanti</span>
                    <button onclick="openObituary()">Read Tribute →</button>
                  </div>

                </div>
              </div>

            </div>

          </section>
        </div>
      </div>

      <!-- ABOUT -->
      <div id="tab-about" style="display:none">
        <div class="about-wrap">
          <div class="ab-hero">
            <h2>Nagar Brahmin Samaj Directory</h2>
            <p>Preserving heritage, celebrating achievements, and strengthening bonds across generations since 2008.</p>
            <div class="ab-grid">
              <div class="ab-stat"><div class="big">14K+</div><div class="lbl">Members</div></div>
              <div class="ab-stat"><div class="big">2.8K</div><div class="lbl">Families</div></div>
              <div class="ab-stat"><div class="big">38</div><div class="lbl">Cities</div></div>
              <div class="ab-stat"><div class="big">15+</div><div class="lbl">Years</div></div>
            </div>
          </div>
          <div class="ab-sec"><h3>Who We Are</h3><p>The Nagar Brahmin Samaj Directory is a trusted community platform connecting families with Nagar Brahmin heritage across India and the world. Built on unity, heritage preservation, and mutual growth, we help individuals and families celebrate their shared cultural identity.</p></div>
          <div class="ab-sec"><h3>Our Mission</h3><ul>
            <li><strong>Connect Families</strong> across geographical boundaries and generations</li>
            <li><strong>Preserve Heritage</strong> through documentation and cultural celebration</li>
            <li><strong>Create Opportunities</strong> for business, professional, and matrimonial connections</li>
            <li><strong>Empower Members</strong> through knowledge sharing and community initiatives</li>
          </ul></div>
          <div class="ab-sec"><h3>Our Values</h3><ul>
            <li><strong>Unity</strong> — Celebrating different professions, backgrounds, and beliefs</li>
            <li><strong>Heritage</strong> — Preserving roots while embracing modernity</li>
            <li><strong>Integrity</strong> — Trust and transparency in all interactions</li>
            <li><strong>Mutual Support</strong> — Helping every member succeed</li>
          </ul></div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ── FOOTER ──────────────────────────────────────── -->
<footer class="site-footer">
  <div class="footer-top">
    <div class="footer-brand">
      <h3>🇮🇳 Nagar Brahmin Samaj</h3>
      <p>A trusted community platform connecting Nagar Brahmin families across India and the world. Built on heritage, driven by unity.</p>
      <div class="footer-socials">
        <a class="social-btn" title="Facebook" onclick="showToast('Opening Facebook...')">📘</a>
        <a class="social-btn" title="WhatsApp" onclick="showToast('WhatsApp link copied!')">💬</a>
        <a class="social-btn" title="YouTube" onclick="showToast('Opening YouTube...')">▶️</a>
        <a class="social-btn" title="Instagram" onclick="showToast('Opening Instagram...')">📸</a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Directory</h4>
      <a onclick="showTab('directory',document.querySelectorAll('.nav-btn')[0])">Member Directory</a>
      <a onclick="showTab('business',document.querySelectorAll('.nav-btn')[1])">Business Directory</a>
      <a onclick="showTab('matrimonial',document.querySelectorAll('.nav-btn')[3])">Matrimonial</a>
      <a onclick="showTab('events',document.querySelectorAll('.nav-btn')[2])">Events</a>
      <a onclick="openAddProfile()">Add Your Profile</a>
    </div>
    <div class="footer-col">
      <h4>Community</h4>
      <a onclick="showToast('Coming soon!')">News & Updates</a>
      <a onclick="showToast('Coming soon!')">Success Stories</a>
      <a onclick="showToast('Coming soon!')">Youth Wing</a>
      <a onclick="showToast('Coming soon!')">Cultural Programs</a>
      <a onclick="showToast('Coming soon!')">Charity Initiatives</a>
    </div>
    <div class="footer-col">
      <h4>Contact</h4>
      <a onclick="showToast('Calling...')">📞 +91 79 2660 1234</a>
      <a onclick="showToast('Opening email...')">✉️ <span class="__cf_email__" data-cfemail="b3daddd5dcf3ddd2d4d2c1c0d2ded2d99ddadd">[email&#160;protected]</span></a>
      <a onclick="showToast('Opening maps...')">📍 Ahmedabad, Gujarat</a>
      <a onclick="showToast('Coming soon!')">Privacy Policy</a>
      <a onclick="showToast('Coming soon!')">Terms of Use</a>
    </div>
  </div>

  <div class="footer-stats">
    <div class="f-stat"><div class="f-num">14,230</div><div class="f-lbl">Members</div></div>
    <div class="f-stat"><div class="f-num">2,847</div><div class="f-lbl">Families</div></div>
    <div class="f-stat"><div class="f-num">38</div><div class="f-lbl">Cities</div></div>
    <div class="f-stat"><div class="f-num">142</div><div class="f-lbl">Businesses</div></div>
    <div class="f-stat"><div class="f-num">87</div><div class="f-lbl">Marriages</div></div>
    <div class="f-stat"><div class="f-num">15+</div><div class="f-lbl">Years Legacy</div></div>
    <div class="f-stat"><div class="f-num">24</div><div class="f-lbl">Annual Events</div></div>
    <div class="f-stat"><div class="f-num">500+</div><div class="f-lbl">NRI Members</div></div>
  </div>

  <div class="footer-bottom">
    <p>© 2025 Nagar Brahmin Samaj Directory. All rights reserved. Made with ❤️ for our community.</p>
    <div class="footer-bottom-links">
      <a onclick="showToast('Coming soon!')">Privacy</a>
      <a onclick="showToast('Coming soon!')">Terms</a>
      <a onclick="showToast('Coming soon!')">Sitemap</a>
      <a onclick="showToast('Coming soon!')">Contact</a>
    </div>
  </div>
</footer>

<!-- STICKY BOTTOM STATS BAR -->
<div class="stats-bar">
  <div class="si"><div><div class="si-num">14,230</div><div class="si-lbl">Members</div></div></div>
  <div class="si"><div><div class="si-num">2,847</div><div class="si-lbl">Families</div></div></div>
  <div class="si"><div><div class="si-num">38</div><div class="si-lbl">Cities</div></div></div>
  <div class="si"><div><div class="si-num">142</div><div class="si-lbl">Businesses</div></div></div>
  <div class="si"><div><div class="si-num">87</div><div class="si-lbl">Matches Made</div></div></div>
  <div class="si"><div><div class="si-num">500+</div><div class="si-lbl">NRI Members</div></div></div>
  <div class="si"><div><div class="si-num">15+</div><div class="si-lbl">Years Legacy</div></div></div>
</div>

<!-- MEMBER MODAL -->
<div class="overlay" id="memberModal" onclick="if(event.target.id==='memberModal')closeModal('memberModal')">
  <div class="modal" id="memberModalContent"></div>
</div>

<!-- EVENT MODAL -->
<div class="overlay" id="eventModal" onclick="if(event.target.id==='eventModal')closeModal('eventModal')">
  <div class="modal" id="eventModalContent"></div>
</div>

<!-- ADD PROFILE MODAL -->
<div class="overlay" id="addProfileModal" onclick="if(event.target.id==='addProfileModal')closeModal('addProfileModal')">
  <div class="modal" style="max-width:600px;max-height:88vh;overflow-y:auto">
    <div class="ap-hdr">
      <button class="mcl mcl-w" onclick="closeModal('addProfileModal')">✕</button>
      <h2>Add Family Profile</h2>
      <p>Join our growing community and connect with families worldwide</p>
    </div>
    <div class="ap-body">
      <div class="fsec">Personal Information</div>
      <div class="f2">
        <div class="fgrp"><label>First Name *</label><input id="ap-fn" type="text" placeholder="Rajesh"></div>
        <div class="fgrp"><label>Last Name *</label><input id="ap-ln" type="text" placeholder="Sharma"></div>
      </div>
      <div class="fgrp"><label>Professional Title *</label><input id="ap-title" type="text" placeholder="Software Engineer, Business Owner…"></div>
      <div class="f2">
        <div class="fgrp"><label>City *</label><input id="ap-city" type="text" placeholder="Ahmedabad"></div>
        <div class="fgrp"><label>Gotra *</label>
          <select id="ap-gotra"><option value="">Select Gotra</option><option>Kashyap</option><option>Atri</option><option>Bharadwaj</option><option>Vatsa</option><option>Sandilya</option><option>Garg</option></select>
        </div>
      </div>
      <div class="fsec">Contact Details</div>
      <div class="f2">
        <div class="fgrp"><label>Email *</label><input id="ap-email" type="email" placeholder="you@email.com"></div>
        <div class="fgrp"><label>Phone *</label><input id="ap-phone" type="tel" placeholder="+91 98250 11234"></div>
      </div>
      <div class="fgrp"><label>Address</label><input id="ap-addr" type="text" placeholder="Full address (optional)"></div>
      <div class="f2">
        <div class="fgrp"><label>Website / LinkedIn</label><input id="ap-web" type="url" placeholder="https://linkedin.com/in/…"></div>
        <div class="fgrp"><label>Member Type</label>
          <select id="ap-type"><option>Head of Family</option><option>Youth (18–35)</option><option>Senior Member</option><option>NRI Member</option></select>
        </div>
      </div>
      <div class="fsec">Additional Info</div>
      <div class="fgrp"><label>Business Info (if applicable)</label><textarea id="ap-biz" placeholder="Business name, industry, achievements…"></textarea></div>
      <div class="fgrp"><label>Family Members</label><textarea id="ap-family" placeholder="Spouse, children (optional)"></textarea></div>
    </div>
    <div class="ap-foot">
      <button class="ap-cancel" onclick="closeModal('addProfileModal')">Cancel</button>
      <button class="ap-submit" onclick="submitProfile()">✅ Submit Profile</button>
    </div>
  </div>
</div>

<!-- FULLSCREEN GALLERY -->
<div id="galOv" onclick="if(event.target.id==='galOv')closeGallery()">
  <button class="gal-close" onclick="closeGallery()">✕</button>
  <div id="galContent" style="display:flex;align-items:center;justify-content:center"></div>
  <div class="gal-ctrl">
    <button class="gal-btn" onclick="galNav(-1)">←</button>
    <span class="gal-cnt" id="galCnt">1/6</span>
    <button class="gal-btn" onclick="galNav(1)">→</button>
  </div>
  <div class="gal-cap" id="galCap"></div>
</div>

<div class="toast" id="toast"></div>


<script>
// ── DATA ───────────────────────────────────────────────────────
const avatarUrls=[
  'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face',
  'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&crop=face',
  'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=200&h=200&fit=crop&crop=face',
  'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&h=200&fit=crop&crop=face',
  'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=200&h=200&fit=crop&crop=face',
  'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&fit=crop&crop=face'
];
const galUrls=[
  'https://images.unsplash.com/photo-1517457373958-b7bdd4587205?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1504450758481-7338eba7524a?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1596178065887-1198b6148b2b?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1515169067868-5387ec356754?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1511578314322-379afb476865?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1513623935135-c896b59073c1?w=400&h=400&fit=crop',
  'https://images.unsplash.com/photo-1564507592333-c60657eea523?w=400&h=400&fit=crop'
];
const evBanners=[
  'https://images.unsplash.com/photo-1604014237800-1c9102c219da?w=900&h=280&fit=crop',
  'https://images.unsplash.com/photo-1531058020387-3be344556be6?w=900&h=280&fit=crop',
  'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=900&h=280&fit=crop',
  'https://images.unsplash.com/photo-1459749411175-04bf5292ceea?w=900&h=280&fit=crop'
];

const members = {!! json_encode($profiles) !!};
console.log(members);

const members1=[
  {id:1,name:"Anuj Jha",initials:"AJ",color:"#E8622A",photo:avatarUrls[0],
   title:"Diamond Merchant & Community Leader",phone:"+91 98250 11234",email:"anuj.jha@example.com",
   address:"Navrangpura, Ahmedabad 380009",website:"www.anujjha.com",city:"Ahmedabad",gotra:"Kashyap",
   tags:["Business","Community"],badge:"bb",badgeTxt:"Business",bg:"linear-gradient(135deg,#E8622A,#F28C5E)",
   biz:{name:"Jha Diamond House",type:"Gems & Jewellery",since:"1985",emp:"45+",award:"Best Business Award 2022"},
   fam:[{n:"Seemaben",r:"Wife",c:"#1A5C35"},{n:"Amit",r:"Son",c:"#0A3A70"},{n:"Priya",r:"Daughter",c:"#E8622A"}],
   emojis:["💎","🏢","🤝","🏆","✨","👨‍👩‍👧‍👦"]},
  {id:2,name:"Dr. Kavitaben Vyas",initials:"KV",color:"#1A5C35",photo:avatarUrls[1],
   title:"Senior Cardiologist, CIMS Hospital",phone:"+91 98790 44561",email:"dr.kavita@cims.com",
   address:"Satellite, Ahmedabad 380015",website:"www.drkavitavyas.com",city:"Ahmedabad",gotra:"Atri",
   tags:["Doctor","Healthcare"],badge:"bp",badgeTxt:"Professional",bg:"linear-gradient(135deg,#1A5C35,#237A48)",
   biz:{name:"Dr. Kavita's Heart Clinic",type:"Medical / Cardiology",since:"2003",emp:"12",award:"Gujarat Medical Excellence 2023"},
   fam:[{n:"Dr. Vivek",r:"Husband",c:"#0A3A70"},{n:"Rishi",r:"Son",c:"#E8622A"}],
   emojis:["🏥","❤️","🔬","📊","👩‍⚕️","🎖️"]},
  {id:3,name:"Hirenbhai Desai",initials:"HD",color:"#0A3A70",photo:avatarUrls[2],
   title:"IT Entrepreneur & Startup Mentor",phone:"+91 99099 77812",email:"hiren@techdesai.io",
   address:"Prahlad Nagar, Ahmedabad 380015",website:"www.techdesai.io",city:"Ahmedabad",gotra:"Bharadwaj",
   tags:["IT","Startup"],badge:"bb",badgeTxt:"Business",bg:"linear-gradient(135deg,#0A3A70,#1A5FA8)",
   biz:{name:"TechDesai Solutions",type:"IT Services & Software",since:"2010",emp:"120+",award:"Gujarat Startup Award 2021"},
   fam:[{n:"Nishaben",r:"Wife",c:"#E8622A"},{n:"Dev",r:"Son",c:"#1A5C35"},{n:"Diya",r:"Daughter",c:"#E8622A"}],
   emojis:["💻","🚀","📱","🌐","🏆","👥"]},
  {id:4,name:"Manjuben Mehta",initials:"MM",color:"#B8820A",photo:avatarUrls[3],
   title:"Principal, Saraswati Vidyalaya",phone:"+91 97277 33891",email:"manju.mehta@svschool.edu",
   address:"Bopal, Ahmedabad 380058",website:"www.svschool.edu.in",city:"Ahmedabad",gotra:"Vatsa",
   tags:["Education","Social Work"],badge:"bp",badgeTxt:"Professional",bg:"linear-gradient(135deg,#B8820A,#D4A017)",
   biz:{name:"Saraswati Vidyalaya",type:"Education / School",since:"1998",emp:"85",award:"Best Principal Award 2020"},
   fam:[{n:"Hitesh",r:"Husband",c:"#0A3A70"},{n:"Isha",r:"Daughter",c:"#E8622A"},{n:"Yash",r:"Son",c:"#1A5C35"}],
   emojis:["📚","🏫","🎓","✏️","🌺","👩‍🏫"]},
  {id:5,name:"Pratik Dave",initials:"PD",color:"#1A5C35",photo:avatarUrls[4],
   title:"Software Engineer, Google USA",phone:"+1 415-555-8921",email:"pratik.dave@gmail.com",
   address:"San Jose, California 95101",website:"linkedin.com/in/pratikdave",city:"NRI – USA",gotra:"Garg",
   tags:["IT","NRI"],badge:"bn",badgeTxt:"NRI",bg:"linear-gradient(135deg,#1A5C35,#237A48)",
   biz:{name:"N/A",type:"Software Engineering",since:"2015",emp:"—",award:"Google L5 Engineer"},
   fam:[{n:"Riya",r:"Wife",c:"#E8622A"},{n:"Aryan",r:"Son",c:"#0A3A70"}],
   emojis:["🌉","🖥️","🇺🇸","✈️","🏡","🤝"]},
  {id:6,name:"Sureshbhai Joshi",initials:"SJ",color:"#E8622A",photo:avatarUrls[5],
   title:"Real Estate Developer, Kothari Group",phone:"+91 94260 55671",email:"suresh@kotharigroup.com",
   address:"SG Highway, Ahmedabad 380060",website:"www.kotharigroup.in",city:"Ahmedabad",gotra:"Sandilya",
   tags:["Real Estate","Business"],badge:"bb",badgeTxt:"Business",bg:"linear-gradient(135deg,#E8622A,#F28C5E)",
   biz:{name:"Kothari Buildcon",type:"Real Estate & Construction",since:"1992",emp:"200+",award:"Best Developer Award 2019"},
   fam:[{n:"Ushaben",r:"Wife",c:"#1A5C35"},{n:"Raj",r:"Son",c:"#0A3A70"},{n:"Meera",r:"Daughter",c:"#E8622A"}],
   emojis:["🏗️","🏢","🔑","📐","🌆","🏠"]}
];

const events=[
  {id:1,day:15,month:"Apr",year:2025,title:"Navratri Mahotsav 2025",short:"Grand celebration with garba, dandiya & cultural programs.",
   desc:"The Annual Navratri Mahotsav is our most beloved celebration — three evenings of garba, dandiya raas, classical performances, and togetherness. Over 4,000 attendees expected from across Gujarat.",
   purpose:"To celebrate our cultural heritage and bring families together. Proceeds support the community scholarship fund.",
   loc:"Tagore Hall, Relief Road, Ahmedabad 380001",time:"7:00 PM – 11:30 PM (3 days)",
   org:"Cultural Committee, Nagar Brahmin Samaj",contact:"+91 98250 99100",
   tag:"Cultural",tagC:"#E8622A",banner:evBanners[0],gallery:galUrls,
   vidTitle:"Navratri 2024 Highlights",vidDesc:"Watch magical moments from last year's celebration"},
  {id:2,day:22,month:"May",year:2025,title:"Annual General Meeting 2025",short:"AGM covering annual report, budget & committee elections.",
   desc:"The Annual General Meeting is our most important governance event. Members will review the annual report, discuss the budget, elect new committee members, and vote on key community initiatives for 2025–26.",
   purpose:"Democratic governance and community decision-making. All registered family heads are eligible to vote.",
   loc:"Lions Hall, Satellite Road, Ahmedabad 380015",time:"10:00 AM – 1:00 PM",
   org:"Executive Committee, Nagar Brahmin Samaj",contact:"+91 97277 10001",
   tag:"Meeting",tagC:"#1A5C35",banner:evBanners[1],gallery:galUrls.slice(1,7),
   vidTitle:"AGM 2024 Recap",vidDesc:"Highlights from last year's annual general meeting"},
  {id:3,day:8,month:"Jun",year:2025,title:"Free Community Health Camp",short:"Free medical checkup in partnership with CIMS Hospital.",
   desc:"A comprehensive health camp offering checkups for diabetes, blood pressure, heart health, eye care, and dental screening. Senior members receive home visit arrangements. Doctors from CIMS and Shalby are volunteering.",
   purpose:"Promoting preventive healthcare within our community, with special focus on senior members.",
   loc:"Community Hall, Naroda, Ahmedabad 382340",time:"8:00 AM – 4:00 PM",
   org:"Health & Welfare Sub-Committee",contact:"+91 98790 44561",
   tag:"Health",tagC:"#0A3A70",banner:evBanners[2],gallery:galUrls.slice(2,8),
   vidTitle:"Health Camp 2024",vidDesc:"See how we served 800+ members last year"},
  {id:4,day:14,month:"Jul",year:2025,title:"Youth Talent Show & Awards",short:"Music, dance, art, sports & scholarship awards for youth.",
   desc:"The annual Youth Talent Show celebrates our community's next generation. Categories include classical and contemporary dance, vocals, instruments, visual art and sports. Cash prizes and scholarships for top performers.",
   purpose:"Encouraging youth talent, building confidence, and creating recognition and mentorship opportunities.",
   loc:"Bhoomi Auditorium, Bopal, Ahmedabad 380058",time:"4:00 PM – 9:00 PM",
   org:"Youth Wing, Nagar Brahmin Samaj",contact:"+91 99099 33200",
   tag:"Youth",tagC:"#B8820A",banner:evBanners[3],gallery:galUrls,
   vidTitle:"Youth Show 2024 Moments",vidDesc:"Relive the incredible talent on display last year"}
];

// ── HELPERS ────────────────────────────────────────────────────
function mkPhoto(m,sz){
  return`<img src="${m.profile_image}" alt="${m.firstname}" style="width:${sz}px;height:${sz}px;object-fit:cover;border-radius:50%" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
  <div class="mc-photo-fb" style="display:none;background:${m.color}">${m.initials}</div>`;
}
function getFullAddress(add){
  let a = add.primary_address;
  return `${a.address_line1}, ${a.address_line2} ${a?.city?.title}`;
}
function showToast(msg){
  const t=document.getElementById('toast');
  t.textContent=msg;t.classList.add('show');
  setTimeout(()=>t.classList.remove('show'),3000);
}
function openModal(id){document.getElementById(id).classList.add('open');document.body.style.overflow='hidden'}
function closeModal(id){document.getElementById(id).classList.remove('open');document.body.style.overflow=''}

// ── RENDER MEMBERS ─────────────────────────────────────────────
function renderMembers(list){
  const g=document.getElementById('membersGrid');
  const lb=document.getElementById('listBody');
  g.innerHTML='';lb.innerHTML='';
  list.forEach(m=>{
    console.log(m);
    style="background:${m.bg}"
    const card=document.createElement('div');
    card.className='mem-card';
    card.innerHTML=`
      <div class="mc-banner" >
        <div class="mc-photo-wrap"><div class="mc-photo">${mkPhoto(m,66)}</div></div>
        <span class="mc-badge bb">${m?.profile_tag[0]?.title || '' }</span>
      </div>
      <div class="mc-body">
        <div class="mc-name">${m.firstname} ${m.surname}</div>
        <div class="mc-title">${m.title}</div>
        <div class="mc-meta">
          <div class="mc-row"><span class="mc-ic">📍</span>${getFullAddress(m)}</div>
          <div class="mc-row"><span class="mc-ic">📞</span>${m.primary_mobile}</div>
          <div class="mc-row"><span class="mc-ic">📧</span>${m.email}</div>
        </div>
        <div class="mc-tags">
        
        </div>
        <div class="mc-acts">
          <button class="mca mca-o" onclick="showToast('Calling ${m.phone}...')">📞 Call</button>
          <button class="mca mca-p" onclick="openMember(${m.id})">View Profile</button>
        </div>
      </div>`;
    g.appendChild(card);
    const tr=document.createElement('tr');
    tr.innerHTML=`
      <td><strong>${m.name ?? ''}</strong></td>
      <td>${(m.title ?? '').split(',')[0]}</td>
      <td>${m.city ?? ''}</td>
      <td>${m.phone ?? ''}</td>
      <td>${m.gotra ?? ''}</td>
      <td><button onclick="openMember(${m.id})" style="background:var(--sf);color:white;border:none;padding:5px 12px;border-radius:6px;font-size:11px;cursor:pointer;font-family:Nunito,sans-serif;font-weight:700">View →</button></td>`;
    lb.appendChild(tr);
  });
  document.getElementById('result-count').textContent=`Showing ${list.length} of 2,847 families`;
}

// ── MEMBER MODAL ───────────────────────────────────────────────
function openMember(id){
  console.log(members);
  const m=members.find(x=>x.id==id);
  //style="background:${m.bg}"
  // console.log(m.banner_image);
  const bannerImage = m?.banner_image || "{!! asset('img/default-banner.jpeg') !!}";
  const el=document.getElementById('memberModalContent');
        // <button class="dtab" data-p="business">Business</button>
        // <button class="dtab" data-p="family">Family</button>
        // <button class="dtab" data-p="gallery">Gallery</button>

  /*<div class="dtab-pane" id="pp-business">
        <div class="igrid">
          <div class="ib"><div class="lbl">🏢 Business</div><div class="val">Business</div></div>
          <div class="ib"><div class="lbl">🏭 Industry</div><div class="val">INduty</div></div>
          <div class="ib"><div class="lbl">📅 Established</div><div class="val">Year</div></div>
          <div class="ib"><div class="lbl">👥 Team Size</div><div class="val">EMP</div></div>
        </div>
        <div class="sec-lbl">🏆 Recognition</div>
        <div style="background:var(--gd-p);border:1px solid #EDD799;border-radius:9px;padding:15px;display:flex;align-items:center;gap:12px">
          <span style="font-size:30px">🏆</span><span style="font-size:14px;color:var(--inkm);font-weight:600">Award</span>
        </div>
      </div>
      <div class="dtab-pane" id="pp-family">
        <div class="sec-lbl">👨‍👩‍👧‍👦 Family Members</div>
        <div class="fam-wrap">
          FAMILY
        </div>
        <p style="margin-top:14px;font-size:13px;color:var(--inks);background:var(--cream);padding:11px;border-radius:8px;border:1px solid var(--bds)">Extended family tree available upon request.</p>
      </div>
      <div class="dtab-pane" id="pp-gallery">
        <div class="gal3">
        </div>
      </div>
      */
  el.innerHTML=`
    <div class="mdl-ban" style="
            color: red;
            background-image: url('${bannerImage}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
         ">
      <div class="mdl-ban-pat"></div>
      <button class="mcl mcl-w" onclick="closeModal('memberModal')">✕</button>
    </div>
    <div class="mdl-top">
      <div class="mdl-av">${mkPhoto(m,106)}</div>
      <div class="mdl-nb"><div class="mdl-name">${m.firstname}</div><div class="mdl-sub">${m.title} &bull; ${m.city}</div></div>
    </div>
    <div class="mdl-body">
      <div class="dtabs">
        <button class="dtab active" data-p="personal">Personal</button>
        
      </div>
      <div class="dtab-pane active" id="pp-personal">
        <div class="igrid">
          <div class="ib"><div class="lbl">📞 Phone</div><div class="val">${m.primary_mobile}</div></div>
          <div class="ib"><div class="lbl">📧 Email</div><div class="val"><a href="mailto:${m.email}">${m.email}</a></div></div>
          <div class="ib"><div class="lbl">📍 Address</div><div class="val">${getFullAddress(m)}</div></div>
          <div class="ib"><div class="lbl">🌐 Website</div><div class="val"><a href="https://${m.website}" target="_blank">${m.website}</a></div></div>
          <div class="ib"><div class="lbl">🏛️ Gotra</div><div class="val">gotra</div></div>
          <div class="ib"><div class="lbl">🏙️ City</div><div class="val">${m.primary_address.city.title}</div></div>
        </div>
        <div class="mdl-acts">
          <button class="mbtn mbtn-p" onclick="showToast('Message sent to ${m.firstname}!')">📨 Send Message</button>
          <button class="mbtn mbtn-o" onclick="showToast('Profile link copied!')">📤 Share</button>
        </div>
      </div>
      
    </div>`;
  el.querySelectorAll('.dtab').forEach(tab=>{
    tab.addEventListener('click',function(){
      el.querySelectorAll('.dtab').forEach(t=>t.classList.remove('active'));
      el.querySelectorAll('.dtab-pane').forEach(p=>p.classList.remove('active'));
      this.classList.add('active');
      el.querySelector('#pp-'+this.dataset.p).classList.add('active');
    });
  });
  openModal('memberModal');
}

// ── RENDER BUSINESS ────────────────────────────────────────────
function renderBusiness(){
  return '';
  const g=document.getElementById('businessGrid');
  members.forEach(m=>{
    const d=document.createElement('div');d.className='biz-card';
    d.innerHTML=`<div class="biz-ban" style="background:${m.bg}"></div>
      <div class="biz-body">
        <div class="biz-ic" style="background:${m.color}">${m.emojis[0]}</div>
        <div class="biz-name">${m.biz.name}</div>
        <div class="biz-type">${m.biz.type}</div>
        <div class="biz-meta">Est. ${m.biz.since} &bull; ${m.biz.emp} employees</div>
        <div class="biz-award">🏆 ${m.biz.award}</div>
        <div class="biz-acts">
          <button onclick="openMember(${m.id})" class="mca mca-p" style="flex:1;padding:8px;font-size:12px">View Profile</button>
          <button onclick="showToast('Info sent!')" style="padding:8px 11px;border:1.5px solid var(--bd);background:white;border-radius:8px;font-size:12px;cursor:pointer;color:var(--inkm);font-family:Nunito,sans-serif;font-weight:700">Info ↗</button>
        </div>
      </div>`;
    g.appendChild(d);
  });
}

// ── RENDER EVENTS ──────────────────────────────────────────────
function renderEvents(){
  const el=document.getElementById('eventsList');
  events.forEach(ev=>{
    const d=document.createElement('div');d.className='ev-card';
    d.innerHTML=`
      <div class="ev-date" style="background:${ev.tagC}"><div class="ev-day">${ev.day}</div><div class="ev-mon">${ev.month}</div></div>
      <div class="ev-info">
        <h4>${ev.title}</h4>
        <p>${ev.short}</p>
        <div class="ev-meta">
          <span class="ev-tag" style="background:${ev.tagC}">${ev.tag}</span>
          <span class="ev-loc">📍 ${ev.loc.split(',')[0]}</span>
          <span class="ev-loc">🕐 ${ev.time}</span>
        </div>
      </div>
      <div class="ev-arrow">Details →</div>`;
    d.addEventListener('click',()=>openEvent(ev.id));
    el.appendChild(d);
  });
}

// ── EVENT MODAL ────────────────────────────────────────────────
function openEvent(id){
  const ev=events.find(x=>x.id===id);
  const el=document.getElementById('eventModalContent');
  const galHtml=ev.gallery.map((url,i)=>`
    <div class="ev-gi" onclick="openGalUrls(${JSON.stringify(ev.gallery)},${i})">
      <img src="${url}" alt="Gallery ${i+1}" onerror="this.parentElement.innerHTML='<div class=ev-gi-em>🎊</div>'">
    </div>`).join('');

  el.innerHTML=`
    <div class="evm-ban">
      <img src="${ev.banner}" alt="${ev.title}" onerror="this.style.display='none';this.parentElement.style.background='linear-gradient(135deg,${ev.tagC},#333)'">
      <div class="evm-ban-ov"></div>
      <button class="mcl mcl-w" onclick="closeModal('eventModal')" style="position:absolute;top:14px;right:14px;z-index:5">✕</button>
      <div class="evm-ban-txt">
        <div class="ev-chip">📅 ${ev.day} ${ev.month} ${ev.year}</div>
        <h2>${ev.title}</h2>
      </div>
    </div>
    <div class="evm-body">
      <div class="evtabs">
        <button class="evtab active" data-p="ov">Overview</button>
        <button class="evtab" data-p="vid">Video</button>
        <button class="evtab" data-p="gal">Gallery</button>
        <button class="evtab" data-p="loc">Location</button>
      </div>
      <div class="ev-pane active" id="ep-ov">
        <div class="ev3grid">
          <div class="ev3b"><div class="eic">🕐</div><div class="el">Time</div><div class="ev">${ev.time}</div></div>
          <div class="ev3b"><div class="eic">👤</div><div class="el">Organiser</div><div class="ev">${ev.org}</div></div>
          <div class="ev3b"><div class="eic">📞</div><div class="el">Contact</div><div class="ev">${ev.contact}</div></div>
        </div>
        <div class="sec-lbl">About This Event</div>
        <p class="ev-desc">${ev.desc}</p>
        <div class="sec-lbl">Purpose & Impact</div>
        <p class="ev-desc">${ev.purpose}</p>
        <div style="display:flex;gap:9px;flex-wrap:wrap">
          <button onclick="showToast('Registration confirmed!')" class="mbtn mbtn-p">✅ Register Now</button>
          <button onclick="showToast('Event link copied!')" class="mbtn mbtn-o">📤 Share Event</button>
        </div>
      </div>
      <div class="ev-pane" id="ep-vid">
        <div class="ev-vid" onclick="showToast('Opening video...')">
          <div class="ev-vid-th"><div class="ev-play">▶</div><div class="ev-vid-t">${ev.vidTitle}</div></div>
        </div>
        <p style="font-size:13.5px;color:var(--inks);line-height:1.7">${ev.vidDesc}. Click play to watch the full recording. More clips available on our YouTube channel.</p>
      </div>
      <div class="ev-pane" id="ep-gal">
        <div class="sec-lbl">Event Photos</div>
        <div class="ev4grid">${galHtml}</div>
        <p style="margin-top:11px;font-size:12px;color:var(--inks);text-align:center">Click any photo to view fullscreen &bull; ${ev.gallery.length} photos</p>
      </div>
      <div class="ev-pane" id="ep-loc">
        <div class="sec-lbl">Venue</div>
        <div class="ev3grid" style="grid-template-columns:1fr 1fr;margin-bottom:16px">
          <div class="ev3b"><div class="eic">📍</div><div class="el">Address</div><div class="ev" style="font-size:12px">${ev.loc}</div></div>
          <div class="ev3b"><div class="eic">📅</div><div class="el">Date & Time</div><div class="ev" style="font-size:12px">${ev.day} ${ev.month} ${ev.year} &bull; ${ev.time}</div></div>
        </div>
        <div class="ev-map">
          <div class="ev-map-ph">
            <div class="mi">🗺️</div>
            <p>${ev.loc.split(',')[0]}</p>
            <small>${ev.loc}</small><br>
            <button onclick="showToast('Opening Google Maps...')" style="margin-top:11px;padding:8px 16px;background:var(--sf);color:white;border:none;border-radius:8px;font-family:Nunito,sans-serif;font-weight:700;font-size:12px;cursor:pointer">Open in Google Maps →</button>
          </div>
        </div>
        <p style="margin-top:13px;font-size:13px;color:var(--inks)">🚌 BRTS stop 200m away &bull; 🅿️ Free parking &bull; ♿ Wheelchair accessible</p>
      </div>
    </div>`;

  el.querySelectorAll('.evtab').forEach(tab=>{
    tab.addEventListener('click',function(){
      el.querySelectorAll('.evtab').forEach(t=>t.classList.remove('active'));
      el.querySelectorAll('.ev-pane').forEach(p=>p.classList.remove('active'));
      this.classList.add('active');
      el.querySelector('#ep-'+this.dataset.p).classList.add('active');
    });
  });
  openModal('eventModal');
}

// ── RENDER MATRIMONIAL ─────────────────────────────────────────
function renderMatrimonial(){
  const g=document.getElementById('matrimonialGrid');
  const pf=[
    {name:"Aakash Jha",age:28,edu:"M.Tech, IIT Bombay",work:"Software Engineer",city:"Ahmedabad",color:"#0A3A70",initials:"AJ",
     photo:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face'},
    {name:"Heena Vyas",age:25,edu:"CA Final",work:"Chartered Accountant",city:"Surat",color:"#E8622A",initials:"HV",
     photo:'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=face'},
    {name:"Niraj Desai",age:30,edu:"MBA, IIM-A",work:"Product Manager",city:"Bangalore",color:"#1A5C35",initials:"ND",
     photo:'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face'},
    {name:"Pooja Mehta",age:26,edu:"MBBS, MS",work:"Doctor",city:"Vadodara",color:"#B8820A",initials:"PM",
     photo:'https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?w=200&h=200&fit=crop&crop=face'},
    {name:"Karan Dave",age:29,edu:"BE, NIRMA Univ.",work:"Civil Engineer",city:"Ahmedabad",color:"#0A3A70",initials:"KD",
     photo:'https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=200&h=200&fit=crop&crop=face'},
    {name:"Shreya Joshi",age:24,edu:"B.Design, NID",work:"UX Designer",city:"Mumbai",color:"#1A5C35",initials:"SJ",
     photo:'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&h=200&fit=crop&crop=face'}
  ];
  pf.forEach(mp=>{
    const d=document.createElement('div');d.className='mat-card';
    d.innerHTML=`
      <div class="mat-photo">
        <img src="${mp.photo}" alt="${mp.name}" onerror="this.parentElement.innerHTML='<div style=width:100%;height:100%;background:${mp.color};display:flex;align-items:center;justify-content:center;font-family:Cormorant Garamond,serif;font-size:24px;font-weight:700;color:white>${mp.initials}</div>'">
      </div>
      <div class="mat-name">${mp.name}</div>
      <div class="mat-sub">Age ${mp.age} &bull; ${mp.city}</div>
      <div class="mat-det">${mp.edu}</div>
      <div class="mat-det" style="margin-bottom:14px">${mp.work}</div>
      <button onclick="showToast('Interest sent for ${mp.name}!')" class="mca mca-p" style="width:100%;padding:9px;font-size:12px">View Full Profile ↗</button>`;
    g.appendChild(d);
  });
}

function renderObituary(){
  return;
  const g=document.getElementById('obituaryGrid');
  const pf=[
    {name:"Aakash Jha",age:28,edu:"M.Tech, IIT Bombay",work:"Software Engineer",city:"Ahmedabad",color:"#0A3A70",initials:"AJ",
     photo:'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=200&h=200&fit=crop&crop=face'},
    {name:"Heena Vyas",age:25,edu:"CA Final",work:"Chartered Accountant",city:"Surat",color:"#E8622A",initials:"HV",
     photo:'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop&crop=face'},
    {name:"Niraj Desai",age:30,edu:"MBA, IIM-A",work:"Product Manager",city:"Bangalore",color:"#1A5C35",initials:"ND",
     photo:'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop&crop=face'},
    {name:"Pooja Mehta",age:26,edu:"MBBS, MS",work:"Doctor",city:"Vadodara",color:"#B8820A",initials:"PM",
     photo:'https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?w=200&h=200&fit=crop&crop=face'},
    {name:"Karan Dave",age:29,edu:"BE, NIRMA Univ.",work:"Civil Engineer",city:"Ahmedabad",color:"#0A3A70",initials:"KD",
     photo:'https://images.unsplash.com/photo-1519345182560-3f2917c472ef?w=200&h=200&fit=crop&crop=face'},
    {name:"Shreya Joshi",age:24,edu:"B.Design, NID",work:"UX Designer",city:"Mumbai",color:"#1A5C35",initials:"SJ",
     photo:'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&h=200&fit=crop&crop=face'}
  ];
  pf.forEach(mp=>{
    const d=document.createElement('div');d.className='mat-card';
    d.innerHTML=`
      <div class="mat-photo">
        <img src="${mp.photo}" alt="${mp.name}" onerror="this.parentElement.innerHTML='<div style=width:100%;height:100%;background:${mp.color};display:flex;align-items:center;justify-content:center;font-family:Cormorant Garamond,serif;font-size:24px;font-weight:700;color:white>${mp.initials}</div>'">
      </div>
      <div class="mat-name">${mp.name}</div>
      <div class="mat-sub">Age ${mp.age} &bull; ${mp.city}</div>
      <div class="mat-det">${mp.edu}</div>
      <div class="mat-det" style="margin-bottom:14px">${mp.work}</div>
      <button onclick="showToast('Interest sent for ${mp.name}!')" class="mca mca-p" style="width:100%;padding:9px;font-size:12px">View Full Profile ↗</button>`;
    g.appendChild(d);
  });
}

// ── GALLERY ────────────────────────────────────────────────────
let _gi=[],_gidx=0;
function openGalUrls(urls,idx){_gi=urls.map(u=>({t:'i',s:u}));_gidx=idx;showGal();document.getElementById('galOv').classList.add('open');document.body.style.overflow='hidden'}
function openGalEmoji(em,idx){_gi=em.map(e=>({t:'e',s:e}));_gidx=idx;showGal();document.getElementById('galOv').classList.add('open');document.body.style.overflow='hidden'}
function showGal(){
  const c=document.getElementById('galContent');
  const it=_gi[_gidx];
  c.innerHTML=it.t==='i'?`<img class="gal-img" src="${it.s}" alt="Gallery">`:`<div class="gal-em">${it.s}</div>`;
  document.getElementById('galCnt').textContent=`${_gidx+1}/${_gi.length}`;
  document.getElementById('galCap').textContent=`Photo ${_gidx+1} of ${_gi.length}`;
}
function galNav(d){_gidx=(_gidx+d+_gi.length)%_gi.length;showGal()}
function closeGallery(){document.getElementById('galOv').classList.remove('open');document.body.style.overflow=''}

// ── TAB ────────────────────────────────────────────────────────
const TABS=['directory','business','events','matrimonial','obituary','about'];
function showTab(name,btn){

  console.log(name,btn);
  TABS.forEach(n=>{const e=document.getElementById('tab-'+n);if(e)e.style.display=(n===name)?'block':'none'});
  document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('active'));
  if(btn)btn.classList.add('active');
  const isAbout=name==='about';
  document.getElementById('sidebarEl').style.display=isAbout?'none':'flex';
  document.getElementById('pageLayout').style.gridTemplateColumns=isAbout?'1fr':'228px 1fr';
  // scroll back to top on tab switch
  window.scrollTo({top:0,behavior:'smooth'});
}

// ── FILTER / SEARCH ────────────────────────────────────────────
function filterMembers(q){
  const f=!q.trim()?members:members.filter(m=>
    m.name.toLowerCase().includes(q.toLowerCase())||
    m.city.toLowerCase().includes(q.toLowerCase())||
    m.tags.some(t=>t.toLowerCase().includes(q.toLowerCase()))||
    m.gotra.toLowerCase().includes(q.toLowerCase()));
  renderMembers(f);
}
function applyFilter(){renderMembers(members)}

// ── VIEW ───────────────────────────────────────────────────────
function setView(v,btn){
  document.querySelectorAll('.vbtn').forEach(b=>b.classList.remove('active'));btn.classList.add('active');
  document.getElementById('membersGrid').style.display=(v==='grid')?'grid':'none';
  document.getElementById('listView').style.display=(v==='list')?'block':'none';
}

// ── ADD PROFILE ────────────────────────────────────────────────
function openAddProfile(){openModal('addProfileModal')}
function submitProfile(){
  const req=['ap-fn','ap-ln','ap-title','ap-city','ap-gotra','ap-email','ap-phone'];
  for(const id of req){if(!document.getElementById(id).value.trim()){showToast('⚠️ Please fill all required fields');return}}
  closeModal('addProfileModal');
  req.concat(['ap-addr','ap-web','ap-biz','ap-family']).forEach(id=>{const e=document.getElementById(id);if(e)e.value=''});
  showToast('✅ Profile submitted! Welcome to Nagar Brahmin Samaj.');
}

// ── KEYBOARD ───────────────────────────────────────────────────
document.addEventListener('keydown',e=>{
  if(document.getElementById('galOv').classList.contains('open')){
    if(e.key==='ArrowLeft')galNav(-1);
    if(e.key==='ArrowRight')galNav(1);
    if(e.key==='Escape')closeGallery();
    return;
  }
  if(e.key==='Escape'){
    ['memberModal','eventModal','addProfileModal'].forEach(id=>{
      if(document.getElementById(id).classList.contains('open'))closeModal(id);
    });
  }
});

// ── TICKER ────────────────────────────────────────────────────
const tickerStats=[
  {num:"14,230",lbl:"Members"},
  {num:"2,847",lbl:"Families"},
  {num:"38",lbl:"Cities"},
  {num:"142",lbl:"Businesses"},
  {num:"87",lbl:"Matches Made"},
  {num:"500+",lbl:"NRI Members"},
  {num:"24",lbl:"Annual Events"},
  {num:"15+",lbl:"Years Legacy"},
  {num:"98%",lbl:"Satisfaction"},
  {num:"₹2.4Cr",lbl:"Donations"}
];
function buildTicker(){
  const ti=document.getElementById('tickerInner');
  const items=tickerStats.map(s=>`<div class="ticker-stat"><span class="t-dot"></span><span class="t-num">${s.num}</span>&nbsp;${s.lbl}</div>`).join('');
  ti.innerHTML=items+items;
}
buildTicker();

// ── INIT ───────────────────────?
renderMembers(members);
renderBusiness();
renderEvents();
renderMatrimonial();
renderObituary();

// ── MOBILE DRAWER ──────────────────────────────────────────────
function toggleMobDrawer(){
  const d=document.getElementById('mobDrawer');
  const b=document.getElementById('mobMenuBtn');
  if(d.classList.contains('open')){closeMobDrawer();}
  else{d.classList.add('open');b.classList.add('open');document.body.style.overflow='hidden';}
}
function closeMobDrawer(){
  document.getElementById('mobDrawer').classList.remove('open');
  document.getElementById('mobMenuBtn').classList.remove('open');
  document.body.style.overflow='';
}

// ── MOBILE NAV ─────────────────────────────────────────────────
function mobNav(name){
  closeMobDrawer();
  document.querySelectorAll('.mob-nav-btn').forEach(b=>b.classList.remove('active'));
  const db=document.getElementById('mnb-'+name);if(db)db.classList.add('active');
  document.querySelectorAll('.mob-tab-item').forEach(b=>b.classList.remove('active'));
  const tb=document.getElementById('mtab-'+name);if(tb)tb.classList.add('active');
  TABS.forEach(n=>{const e=document.getElementById('tab-'+n);if(e)e.style.display=(n===name)?'block':'none'});
  document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('active'));
  const tabIdx={directory:0,business:1,events:2,matrimonial:3,about:4};
  const desktopBtns=document.querySelectorAll('.nav-btn');
  if(desktopBtns[tabIdx[name]])desktopBtns[tabIdx[name]].classList.add('active');
  const isAbout=name==='about';
  document.getElementById('sidebarEl').style.display=isAbout?'none':'flex';
  document.getElementById('pageLayout').style.gridTemplateColumns=isAbout?'1fr':'228px 1fr';
  window.scrollTo({top:0,behavior:'smooth'});
}

// Mobile search sync
(function(){
  const mob=document.getElementById('mobSearchInput');
  if(mob)mob.addEventListener('input',function(){filterMembers(this.value);});
})();

</script>
</body>
</html>
