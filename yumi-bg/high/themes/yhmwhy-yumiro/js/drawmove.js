(function(){function h(){}function B(){this.oda="";this.mi=[];this.iia={}}function v(){this.mo=[];this.ma=!1;this.ia=0}function r(){this.iian()}function I(){this.iian()}function e(){this.iian()}function l(){}function u(){this.iian()}function j(){}function ja(){}function s(){}function c(){this.iian()}function t(){this.z=this.y=this.x=0}function b(){this.iian()}function q(){this.iimo()}function Eb(){return h.dnii()[h.doia()+h.doim()+h.doii()]}function ka(){this.iian()}function la(){this.iian()}function f(){}
function Fb(){}h.dmna=function(){return s.oom};h.doia=function(){return"do"};h.dnii=function(){return document};h.doim=function(){return"ma"};h.doii=function(){return"in"};B.prototype.iii=function(a,d,n){var b=new l;this.mi.push(b);this.iia[a]=b;this.dna(a);b.iian(a,d,n)};B.prototype.iidd=function(){for(var a=0,d=this.mi.length;a<d;a++)this.mi[a].iidd()};B.prototype.iiao=function(a){for(var d=0,n=this.mi.length;d<n;d++)this.mi[d].iiao(a)};B.prototype.aim=function(){for(var a=0,d=this.mi.length;a<
d;a++)this.mi[a].aii()};B.prototype.dna=function(a){return this.oda=a};B.prototype.iimd=function(){return this.iia[this.oda]};B.prototype.ado=function(a){return this.iia[a]};B.prototype.iim=function(){return this.iimd().iim()};B.prototype.oon=function(){return this.iimd().oon()};B.prototype.doni=function(){return this.iimd().imad()};v.prototype.iimd=function(a){this.mo.push(a)};v.prototype.dnma=function(a){return this.mo[a]};v.prototype.dnna=function(){return this.ia};v.prototype.dndm=function(a){this.ma=
a;this.ia=5*a.doma()};v.prototype.iiao=function(a){this.ma.iidi(a)};v.prototype.ndo=function(){return this.ma.inm()*s.iimn};r.prototype.iian=function(){this.nm=[];this.ma=!1};r.prototype.iimd=function(a){this.nm.push(a)};r.prototype.omd=function(){for(var a=0,d=this.nm.length;a<d;a++)this.nm[a].mom()};r.prototype.dndm=function(a){this.ma=a};r.prototype.iidd=function(a){for(var d=0,n=this.nm.length;d<n;d++)this.nm[d].iidd(a)};r.prototype.dnma=function(a){return this.nm[a]};r.dmni=function(a,d){return a.dodm()>
d.dodm()};r.prototype.mam=function(){return this.nm.dnin(r.dmni)};I.prototype.iian=function(){this.m=this.dm=this.mm=0;this.domn()};I.prototype.dnam=function(a){this.dm=a};I.prototype.domn=function(){};I.prototype.dmon=function(){this.m=(new Date).getTime()-this.mm;this.mm=(new Date).getTime();oad.iiao(this.dm);this.dm+=this.m/s.iimn;3600<this.dm&&(this.dm=0)};I.prototype.iiid=function(){this.m=(new Date).getTime()-this.mm;this.mm=(new Date).getTime();oad.iiao(this.dm);this.dm+=this.m/s.iimn;3600<
this.dm&&(this.dm=0);oad.iidd()};I.prototype.dnmo=function(){oad.iidd()};I.prototype.imo=function(){mii.iaon()&&(this.mm=(new Date).getTime(),setInterval("ann.dmon()",41),setInterval("ann.dnmo()",41))};e.prototype.iian=function(){this.o=dai.dmn();this.n=void 0;this.ana=j.iiia;this.ani=1;this.io=!1;this.d=!0;this.doa="";this.a=!1;this.mia=[]};e.prototype.imao=function(a){this.n=a};e.prototype.dnao=function(a){this.a=a};e.prototype.dono=function(a){this.ana=a};e.prototype.dmnd=function(a){this.ani=
a};e.prototype.dnio=function(a){this.io=a};e.prototype.dnan=function(a){this.d=a};e.prototype.doio=function(a){this.doa=a};e.prototype.imad=function(){return this.o};e.prototype.dmom=function(){return this.ani};e.prototype.doao=function(){return this.a};e.prototype.dmnm=function(){return this.doa};e.prototype.domo=function(){return 0<this.mia.length?this.mia[0].doaa():0};e.prototype.dnia=function(){return 0<this.mia.length?this.mia[this.mia.length-1].doaa():0};e.prototype.imda=function(){return this.n};
e.prototype.dnod=function(){return this.mia[0]};e.prototype.dnnm=function(){return this.mia[this.mia.length-1]};e.prototype.aaa=function(){return this.d?this.a.doma():this.dnnm().doaa()-this.dnod().doaa()};e.prototype.oni=function(a){for(var d=this.mia.length,n=0;n<d;n++)if(this.mia[n].doaa()>=a)return n-1;return this.mia.length-1};e.prototype.dmoi=function(a){a=f.iinn(a);for(var d=this.mia.length,n=0;n<d;n++)if(this.mia[n].doaa()==a)return this.mia[n];return!1};e.prototype.dmod=function(a){return this.mia[a]};
e.prototype.iio=function(){return this.ana};e.prototype.doda=function(){return this.d&&1<this.mia.length};e.prototype.doam=function(){return 1<this.ani};e.prototype.dnnd=function(){return this.io};e.prototype.iman=function(a){for(var d=this.mia.length,n=0;n<d&&!(this.mia[n].doaa()>a.doaa());n++);this.mia.iind(n,a);a.dodi(this);return a};l.prototype.iian=function(a,d,n){this.o=a;this.mnn=h.dnii().getElementById(a);this.om=d;this.oo=n;this.dd=f.domm("",this.om,this.oo,this.mnn);this.md=this.dd.getContext("2d");
this.odo=!0;this.oii=new v;this.ama=new r;var b=new Image;b.src=f.oin(oad.doni()+"/instant.png");var c=this;b.onload=function(){c.md.drawImage(b,0,0)}};l.prototype.dnda=function(){return this.om};l.prototype.dnni=function(){return this.oo};l.prototype.dmmn=function(){return this.mnn};l.prototype.dodo=function(){return this.dd};l.prototype.iim=function(){return this.oii};l.prototype.imad=function(){return this.o};l.prototype.oon=function(){return this.ama};l.prototype.iiao=function(a){this.oii.iiao(a)};
l.prototype.iidd=function(){this.md.clearRect(0,0,this.dd.width,this.dd.height);this.ama.omd();this.ama.mam();this.md.save();this.ama.iidd(this.md);this.md.restore()};l.prototype.iina=function(){this.md.clearRect(0,0,this.dd.width,this.dd.height)};l.prototype.aii=function(){var a=jQuery("<canvas style='overflow:hidden; width:"+this.om+"px; height:"+this.oo+"px;'></canvas>").get(0);h.dnii().getElementById(this.o).appendChild(a);f.dnid(oad.doni()+"/instant.png",a)};u.prototype.iian=function(){this.o=
dai.dmmo();this.on=[];this.ddm=s.iimn;this.mda=0;this.mdo=!1;oad.iimd().iim().iimd(this)};u.prototype.imad=function(){return this.o};u.prototype.dodd=function(a){this.ddm=a};u.prototype.doma=function(){return this.ddm};u.prototype.inm=function(){return this.mda};u.prototype.dnaa=function(a){this.on.push(a);a.dnao(this);return a};u.prototype.dnmm=function(a,d,b){var c=f.dni(b,a.dmnm());b=c&&a.iio()!=j.iidi?a.imda().dndo(c):a.imda();var e=a.iio();if(!(d<a.domo())&&(!(d>a.dnia())||a.doda())){a.doam()&&
(d=(d-a.domo())*a.dmom()%a.aaa(),d=a.domo()+d);a.dnnd()&&(d=2*(d-a.domo())%(2*a.aaa()),d>a.aaa()&&(d=2*a.aaa()-d),d=a.domo()+d);var g=a.oni(d),m=a.dmod(g),g=a.dmod(g+1);if(m&&!g&&a.doda())g=a.dnod(),temp=g.doaa(),g.nd=this.doma(),b[e].apply(b,f.aan(m.ini(g,d),c)),g.nd=temp;else if(m||g)m&&!m.did()?b[e].apply(b,f.aan(m.doai(),c)):!m&&g?b[e].apply(b,f.aan(g.doai(),c)):!g&&m?b[e].apply(b,f.aan(m.doai(),c)):b[e].apply(b,f.aan(m.ini(g,d),c))}};u.prototype.iidi=function(a,d){var b=a%this.doma();this.mda=
b;for(var c,e=this.on.length,g=0;g<e;g++)c=this.on[g],this.dnmm(c,b,d)};j.iidi="iidi";j.iioi="iioi";j.iiia="iiia";j.iidn="iidn";j.iido="iido";j.imaa="imaa";j.iioo="iioo";j.iiom="iiom";j.imai="imai";j.doan="doan";ja.dnmn="source-over";ja.iioa="lighter";s.iimn=25;s.aid=20;s.oom=1062;for(var Cb=0,Gb=Eb().replace("www.",""),Db=0;Db<Eb().replace("www.","").length;Db++)Cb+=Gb.charCodeAt(Db);s.man=Cb-h.dmna();c.prototype.iian=function(){this.o=dai.dnim();this.na=!1;this.dn=this.nd=0;this.amo=!0};c.prototype.dnad=
function(a){this.dn=a};c.prototype.doid=function(a){this.nd=f.iinn(a)};c.prototype.dodi=function(a){this.na=a};c.prototype.omi=function(a){this.amo=a};c.prototype.ini=function(a,d){var b=(d-this.nd)/(a.doaa()-this.nd);return f.iiod(this.dn,a.doai(),b)};c.prototype.imad=function(){return this.o};c.prototype.doaa=function(){return this.nd};c.prototype.doai=function(){return this.dn};c.prototype.did=function(){return this.amo};t.prototype.iimi=function(){p=new t;p.x=this.x;p.y=this.y;p.z=this.z;return p};
t.prototype.iion=function(){return[this.x,this.y,this.z]};b.prototype.iian=function(){this.o=dai.ndn();this.doa=this.da="";this.ao=this.ai=1;this.mdn=this.di=this.ni=0;this.dnn=[1,1];this.oa=[1,1];this.i=[1,1];this.and=new t;this.im=1;this.amn=new t;this.mao=new t;this.dia=new t;this.oid=new t;this.mdd=!1;this.nio={};this.nii=this.amd=this.ami=this.idi=this.aa=this.id=this.doo=this.oao=this.am=this.no=void 0;this.nn=[];this.ad=this.mn=null;this.oan=ja.dnmn;this.idm=!1;oad.iimd().oon().iimd(this)};
b.prototype.imam=function(){this.nia();this.dmno();this.dona();this.dii();this.oim()};b.prototype.dmno=function(){this.no=this.dnda()*(this.ni%this.ai);this.am=this.dnni()*f.iinn(this.ni/this.ai)};b.prototype.dona=function(){this.id=-this.mao.x*this.i[0];this.aa=-this.mao.y*this.i[1]};b.prototype.nia=function(){this.oao=this.mn.width/this.ai;this.doo=this.mn.height/this.ao};b.prototype.dii=function(){this.idi=this.dnda()*this.i[0];this.ami=this.dnni()*this.i[1]};b.prototype.oim=function(){this.amd=
this.oa[0]*this.dnn[0];this.nii=this.oa[1]*this.dnn[1]};b.prototype.imad=function(){return this.o};b.prototype.inm=function(){return this.ni};b.prototype.dndo=function(a){return this.nio[a]};b.prototype.iimm=function(){return this.amn.z};b.prototype.dnda=function(){return this.oao};b.prototype.doaa=function(){return this.ni};b.prototype.dnni=function(){return this.doo};b.prototype.domd=function(){return this.idm};b.prototype.donm=function(){return this.idi};b.prototype.dim=function(){return this.ami};
b.prototype.inn=function(){return this.dnda()*this.oa[0]};b.prototype.ind=function(){return this.dnni()*this.oa[1]};b.prototype.dnoi=function(){return this.di};b.prototype.dnm=function(){return{x:this.id,y:this.aa}};b.prototype.donn=function(){return this.oa};b.prototype.dndn=function(){return this.i};b.prototype.doin=function(){return this.im};b.prototype.nam=function(a,d){return this.idm.mad(a,d)};b.prototype.ond=function(a,d){return this.idm.oio(a,d)};b.prototype.aad=function(){return this.and};
b.prototype.dodm=function(){return this.iimm()+this.and.z};b.prototype.dnoo=function(){return this.amn};b.prototype.ooo=function(){return this.dnn};b.prototype.ndd=function(){this.oid.x=this.mao.x*this.i;this.oid.y=this.mao.y*this.i;return this.oid};b.prototype.adi=function(a){this.mdd=a};b.prototype.dnmi=function(a,d,b){"undefined"===typeof b&&(b=this.amn.z);this.amn.x=a;this.amn.y=d;this.iida(b);this.dona()};b.prototype.doio=function(a){this.doa=a};b.prototype.dnnn=function(a){this.nn.push(a);a.dodn(this)};
b.prototype.aio=function(a,d){this.mao.x=a;this.mao.y=d};b.prototype.dond=function(){mii.dnno()};b.prototype.dnai=function(a,d,b){"undefined"===typeof d&&(d=1);"undefined"===typeof b&&(b=1);this.da=a;this.ai=d;this.ao=b;var c=new Image;mii.moi();var e=this;c.onload=function(){e.mn=f.oma(c);e.imam();e.dond()};c.onerror=function(){e.mn=f.domm("",1,1);e.imam();e.dond()};c.src="root.png"!=a?f.oin(oad.doni()+"/"+a):f.oin(a)};b.prototype.dodn=function(a){this.ad=a};b.prototype.nai=function(a,d){this.dnn[0]=
a;this.dnn[1]=d;this.oim()};b.prototype.domi=function(a){this.oan=a};b.prototype.iida=function(a){this.amn.z=a};b.prototype.dnoa=function(a,d){this.i[0]=a;this.i[1]=d;this.dona();this.dii()};b.prototype.dmoa=function(a,d){this.oa[0]=a;this.oa[1]=d;this.oim()};b.prototype.ain=function(a){this.di=a;this.mdn=f.doad(a)};b.prototype.dnmd=function(a){this.ni=a;this.dmno()};b.prototype.iin=function(){this.dmoa(1,1);this.dnoa(1,1);this.dnmd(0);this.and=new t;this.ain(0);this.im=1};b.prototype.dnon=function(a){return this.nio[a]};
b.prototype.dnom=function(){return this.doa};b.prototype.mom=function(){this.idm=!1};b.prototype.aai=function(a){delete this.nio[a]};b.prototype.ooa=function(a){for(var d=this.dndo(a),b=this.nn.length,c=0;c<b;c++)d.dnnn(this.nn[c].dmnn(a))};b.prototype.dmnn=function(a){var d=new b;d.setName(this.ii+_+a);d.da=this.da;d.mn=this.mn;d.ai=this.ai;d.ao=this.ao;d.doio(a);d.amn=this.amn.iimi();d.domi(this.oan);d.aio(this.mao.x,this.mao.y);d.nai(this.dnn[0],this.dnn[1]);this.nio[a]=d;d.adi(this);return d};
b.prototype.iioi=function(a){this.ain(a)};b.prototype.doan=function(a){this.dnmd(Math.round(a)%(this.ai*this.ao))};b.prototype.iioo=function(a,d){this.dmoa(a,d)};b.prototype.imai=function(a){this.im=a};b.prototype.iiia=function(a,d,b){this.iidn(a);this.iido(d);this.imaa(b)};b.prototype.iido=function(a){this.and.y=a};b.prototype.imaa=function(a){this.and.z=a};b.prototype.iidn=function(a){this.and.x=a};b.prototype.iiom=function(a,d){0>=a&&(a=0.01);0>=d&&(d=0.01);this.dnoa(a,d)};b.prototype.dmm=function(a){this.idm||
(this.ad?(this.ad.dmm(a),this.idm=this.ad.domd().iimi()):this.idm=new q,this.idm.dndi(this.amn.x+this.and.x,this.amn.y+this.and.y),this.idm.iino(this.mdn),this.idm.iidm(this.amd,this.nii));this.iom(a)};b.prototype.iom=function(a){a.setTransform(this.idm.m0,this.idm.m1,this.idm.m2,this.idm.m3,this.idm.m4,this.idm.m5)};b.prototype.iidd=function(a){this.dmm(a);a.globalimai=this.im;a.globalCompositeOperation=this.oan;a.drawImage(this.mn,this.no,this.am,this.oao,this.doo,this.id,this.aa,this.idi,this.ami)};
q.prototype.iimi=function(){var a=new q;a.m0=this.m0;a.m1=this.m1;a.m2=this.m2;a.m3=this.m3;a.m4=this.m4;a.m5=this.m5;return a};q.prototype.iimo=function(){this.m0=1;this.m2=this.m1=0;this.m3=1;this.m5=this.m4=0};q.prototype.dndd=function(a){var d=this.m1*a.m0+this.m3*a.m1,b=this.m0*a.m2+this.m2*a.m3,c=this.m1*a.m2+this.m3*a.m3,e=this.m0*a.m4+this.m2*a.m5+this.m4,g=this.m1*a.m4+this.m3*a.m5+this.m5;this.m0=this.m0*a.m0+this.m2*a.m1;this.m1=d;this.m2=b;this.m3=c;this.m4=e;this.m5=g};q.prototype.iinm=
function(){var a=1/(this.m0*this.m3-this.m1*this.m2),d=-this.m1*a,b=-this.m2*a,c=this.m0*a,e=a*(this.m2*this.m5-this.m3*this.m4),g=a*(this.m1*this.m4-this.m0*this.m5);this.m0=this.m3*a;this.m1=d;this.m2=b;this.m3=c;this.m4=e;this.m5=g};q.prototype.iino=function(a){var d=Math.cos(a);a=Math.sin(a);var b=this.m1*d+this.m3*a,c=this.m0*-a+this.m2*d,e=this.m1*-a+this.m3*d;this.m0=this.m0*d+this.m2*a;this.m1=b;this.m2=c;this.m3=e};q.prototype.dndi=function(a,d){this.m4+=this.m0*a+this.m2*d;this.m5+=this.m1*
a+this.m3*d};q.prototype.iidm=function(a,d){this.m0*=a;this.m1*=a;this.m2*=d;this.m3*=d};q.prototype.mad=function(a,d){var b=a,c=d;a=b*this.m0+c*this.m2+this.m4;d=b*this.m1+c*this.m3+this.m5;return[a,d]};q.prototype.oio=function(a,d){var b=this.iimi();b.iinm();return b.mad(a,d)};Array.prototype.dooa=function(a){this.splice(a,1)};Array.prototype.iind=function(a,d){this.splice(a,0,d)};Array.prototype.iini=function(a){this.dooa(this.indexOf(a))};Array.prototype.dnin=function(a){var d=!1,b;do{b=!1;for(var c=
this.length-1,e=0;e<c;e++)a(this[e],this[e+1])&&(d=this[e],this[e]=this[e+1],this[e+1]=d,d=b=!0)}while(b);return d};ka.prototype.iian=function(){this.od=this.oi=this.odd=this.an=0};ka.prototype.dmmo=function(){this.an++;return this.an};ka.prototype.dmn=function(){this.odd++;return this.odd};ka.prototype.dnim=function(){this.od++;return this.od};ka.prototype.ndn=function(){this.oi++;return this.oi};la.prototype.iian=function(){this.iid=0};la.prototype.iaon=function(){return 0>=this.iid};la.prototype.moi=
function(){this.iid++};la.prototype.dnno=function(){this.iid--;ann.imo()};f.iinn=Math.floor;f.oma=function(a){var d=a.width,b=a.height,c=s.man,e=d%c,g=b%c,m=f.iinn(e/2),h=f.iinn(g/2),e=f.iinn(d-e),g=f.iinn(b-g),l=d-(e+m),k=b-(g+h),u=f.domm("myCanvas",d,b),j=u.getContext("2d");j.drawImage(a,0,0);if(a.width<2*c&&a.height<2*c)return u;j.clearRect(m,h,e,g);for(var y=0;y<e;y+=c)for(var w=0;w<g;w+=c)j.drawImage(a,y+m,w+h,c,c,d-y-l-c,b-w-k-c,c,c);return u};f.mai=function(){var a=document.createElement("canvas");
return a.getContext&&a.getContext("2d")};f.domm=function(a,b,c,e){var f=h.dnii().createElement("canvas");f.id=a;f.width=b;f.height=c;e&&e.appendChild(f);return f};f.oin=function(a){return"images/"+a};f.dnid=function(a,b){var c=new Image;c.src=f.oin(a);b&&b.appendChild(c)};f.dni=function(){return""};f.aan=function(a,b){if(a instanceof Array){if(b instanceof Array)return a.slice().concat(b);a=a.slice();a.push(b);return a}return f.aan([a],b)};f.dmoo=function(a){return!isNaN(parseFloat(a))&&isFinite(a)};
f.doad=function(a){return 0.017453292519943295*a};f.iiod=function(a,b,c){if("[object Array]"===Object.prototype.toString.call(a)){for(var e=[],h=a.length,g=0;g<h;g++)e.push(a[g]*(1-c)+b[g]*c),f.dmoo(e[g])||console.log("Vrong iiod value, array val: "+e[g]+" v0:"+a+" v1:"+b+" p:"+c+" i:"+g);return e}a=a*(1-c)+b*c;f.dmoo(a)||console.log("Vrong iiod value, number :"+a);return a};Fb.iian=function(){ann=new I;dai=new ka;mii=new la;oad=new B;oad.iii("ninjashibi",360,323);var a=new b;a.dnai("root.png",1,
1);a.aio(0,0);a.nai(0.7,0.7);a.domi("source-over");a.dnmi(-328,-31,0);var d=new b;d.dnai("Mains-Armee-Gauche.png",1,1);d.aio(110.20408163265314,208.1632653061224);d.nai(1,1);d.domi("source-over");d.dnmi(-106.12244897959168,-183.67346938775532,1);var f=new b;f.dnai("Meche-Back.png",1,1);f.aio(0,0);f.nai(1,1);f.domi("source-over");f.dnmi(128.57142857142864,-108.16326530612255,2);var h=new b;h.dnai("Cheveux-Back.png",1,1);h.aio(255.10204081632634,191.8367346938776);h.nai(1,1);h.domi("source-over");h.dnmi(46.93877551020392,
-24.48979591836772,3);var j=new b;j.dnai("Meche-7.png",1,1);j.aio(136.73469387755105,4.0816326530612255);j.nai(1,1);j.domi("source-over");j.dnmi(-42.85714285714277,-151.0204081632649,4);var g=new b;g.dnai("Corp.png",1,1);g.aio(298.57142857142844,221.42857142857122);g.nai(0.7,0.7);g.domi("source-over");g.dnmi(692.8571428571433,437.1428571428575,5);var m=new b;m.dnai("Foulard.png",1,1);m.aio(0,0);m.nai(1,1);m.domi("source-over");m.dnmi(-106.1224489795918,-265.30612244897986,6);var l=new b;l.dnai("Meche-10.png",
1,1);l.aio(63.26530612244897,12.244897959183678);l.nai(1,1);l.domi("source-over");l.dnmi(-20.40816326530617,-65.30612244897956,7);var q=new b;q.dnai("Bras-Droite.png",1,1);q.aio(69.38775510204084,44.89795918367348);q.nai(1,1);q.domi("source-over");q.dnmi(116.32653061224492,-148.97959183673453,8);var k=new b;k.dnai("Visage.png",1,1);k.aio(93.87755102040822,161.22448979591826);k.nai(1,1);k.domi("source-over");k.dnmi(-83.6734693877552,-300.000000000001,9);var r=new b;r.dnai("Meche-9.png",1,1);r.aio(-2.0408163265306127,
12.244897959183678);r.nai(1,1);r.domi("source-over");r.dnmi(132.65306122448837,-175.51020408163274,10);var s=new b;s.dnai("Meche-6.png",1,1);s.aio(142.85714285714286,6.122448979591842);s.nai(1,1);s.domi("source-over");s.dnmi(-38.7755102040817,-177.55102040816308,11);var y=new b;y.dnai("Meche-8.png",1,1);y.aio(30.61224489795919,85.71428571428577);y.nai(1,1);y.domi("source-over");y.dnmi(132.65306122448987,-163.2653061224493,12);var w=new b;w.dnai("Mains-Droite.png",1,1);w.aio(246.93877551020398,48.9795918367347);
w.nai(1,1);w.domi("source-over");w.dnmi(-30.61224489795943,116.32653061224482,13);var t=new b;t.dnai("Meche-5.png",1,1);t.aio(126.53061224489802,6.122448979591831);t.nai(1,1);t.domi("source-over");t.dnmi(-6.122448979592071,-191.83673469387753,14);var v=new b;v.dnai("Meche-3.png",1,1);v.aio(0,0);v.nai(1,1);v.domi("source-over");v.dnmi(12.244897959183682,-167.34693877551024,15);var ea=new b;ea.dnai("Oeil-Droite.png",1,1);ea.aio(51.020408163265316,34.69387755102042);ea.nai(1,1);ea.domi("source-over");
ea.dnmi(75.51020408163265,8.163265306122444,16);var fa=new b;fa.dnai("Meche-2.png",1,1);fa.aio(0,0);fa.nai(1,1);fa.domi("source-over");fa.dnmi(10.204081632653075,-171.42857142857144,17);var ga=new b;ga.dnai("Meche-1.png",1,1);ga.aio(0,0);ga.nai(1,1);ga.domi("source-over");ga.dnmi(-12.244897959183625,-169.3877551020406,18);var ha=new b;ha.dnai("Oeil-Gauche.png",1,1);ha.aio(26.53061224489797,34.69387755102042);ha.nai(1,1);ha.domi("source-over");ha.dnmi(-38.77551020408163,16.326530612244905,19);var ia=
new b;ia.dnai("Meche-4.png",1,1);ia.aio(46.93877551020408,6.122448979591838);ia.nai(1,1);ia.domi("source-over");ia.dnmi(-14.28571428571433,-171.42857142857127,20);g.dnnn(d);k.dnnn(f);k.dnnn(h);k.dnnn(j);a.dnnn(g);g.dnnn(m);k.dnnn(l);g.dnnn(q);g.dnnn(k);k.dnnn(r);k.dnnn(s);k.dnnn(y);q.dnnn(w);k.dnnn(t);k.dnnn(v);k.dnnn(ea);k.dnnn(fa);k.dnnn(ga);k.dnnn(ha);k.dnnn(ia);oad.oon().dndm(a);var z=new u;z.dodd(80);var x=new u;x.dodd(60);var J=new u;J.dodd(600);var ja=new u;ja.dodd(80);var K=new e;K.imao(g);
K.dono("iiia");K.dnio(!1);K.dmnd(1);K.dnan(!0);var ma=new c;ma.doid(0);ma.dnad([0,0,0]);ma.omi(!0);K.iman(ma);var na=new c;na.doid(35);na.dnad([2.857142857142857,-4.285714285714285,0]);na.omi(!0);K.iman(na);z.dnaa(K);var L=new e;L.imao(q);L.dono("iiia");L.dnio(!1);L.dmnd(1);L.dnan(!0);var oa=new c;oa.doid(0);oa.dnad([0,0,0]);oa.omi(!0);L.iman(oa);var pa=new c;pa.doid(44);pa.dnad([-2.0408163265306127,-8.163265306122451,0]);pa.omi(!0);L.iman(pa);z.dnaa(L);var M=new e;M.imao(w);M.dono("iiia");M.dnio(!1);
M.dmnd(1);M.dnan(!0);var qa=new c;qa.doid(0);qa.dnad([0,0,0]);qa.omi(!0);M.iman(qa);var ra=new c;ra.doid(48);ra.dnad([2.0408163265306127,-8.163265306122451,0]);ra.omi(!0);M.iman(ra);z.dnaa(M);var N=new e;N.imao(d);N.dono("iiia");N.dnio(!1);N.dmnd(1);N.dnan(!0);var sa=new c;sa.doid(0);sa.dnad([0,0,0]);sa.omi(!0);N.iman(sa);var ta=new c;ta.doid(52);ta.dnad([8.163265306122451,-12.244897959183678,0]);ta.omi(!0);N.iman(ta);z.dnaa(N);var O=new e;O.imao(m);O.dono("iiia");O.dnio(!1);O.dmnd(1);O.dnan(!0);
var ua=new c;ua.doid(0);ua.dnad([0,0,0]);ua.omi(!0);O.iman(ua);var va=new c;va.doid(40);va.dnad([-2.0408163265306127,-6.122448979591838,0]);va.omi(!0);O.iman(va);z.dnaa(O);var P=new e;P.imao(q);P.dono("iioi");P.dnio(!1);P.dmnd(1);P.dnan(!0);var wa=new c;wa.doid(0);wa.dnad(0);wa.omi(!0);P.iman(wa);var xa=new c;xa.doid(43);xa.dnad(4);xa.omi(!0);P.iman(xa);z.dnaa(P);var Q=new e;Q.imao(w);Q.dono("iioi");Q.dnio(!1);Q.dmnd(1);Q.dnan(!0);var ya=new c;ya.doid(0);ya.dnad(0);ya.omi(!0);Q.iman(ya);var za=new c;
za.doid(40);za.dnad(-6);za.omi(!0);Q.iman(za);z.dnaa(Q);var R=new e;R.imao(d);R.dono("iioi");R.dnio(!1);R.dmnd(1);R.dnan(!0);var Aa=new c;Aa.doid(0);Aa.dnad(0);Aa.omi(!0);R.iman(Aa);var Ba=new c;Ba.doid(54);Ba.dnad(-8);Ba.omi(!0);R.iman(Ba);z.dnaa(R);var E=new e;E.imao(m);E.dono("iioo");E.dnio(!1);E.dmnd(1);E.dnan(!0);var Ca=new c;Ca.doid(0);Ca.dnad([1,1]);Ca.omi(!0);E.iman(Ca);var Da=new c;Da.doid(48);Da.dnad([1.0205761316872433,1.0476190476190474]);Da.omi(!0);E.iman(Da);var Ea=new c;Ea.doid(80);
Ea.dnad([1,1]);Ea.omi(!0);E.iman(Ea);z.dnaa(E);var F=new e;F.imao(k);F.dono("iiia");F.dnio(!1);F.dmnd(1);F.dnan(!0);var Fa=new c;Fa.doid(0);Fa.dnad([0,0,0]);Fa.omi(!0);F.iman(Fa);var Ga=new c;Ga.doid(47);Ga.dnad([0,-4.0816326530612255,0]);Ga.omi(!0);F.iman(Ga);var Ha=new c;Ha.doid(80);Ha.dnad([0,0,0]);Ha.omi(!0);F.iman(Ha);z.dnaa(F);var S=new e;S.imao(j);S.dono("iioi");S.dnio(!1);S.dmnd(1);S.dnan(!0);var Ia=new c;Ia.doid(0);Ia.dnad(0);Ia.omi(!0);S.iman(Ia);var Ja=new c;Ja.doid(15);Ja.dnad(-4);Ja.omi(!0);
S.iman(Ja);x.dnaa(S);var T=new e;T.imao(s);T.dono("iioi");T.dnio(!1);T.dmnd(1);T.dnan(!0);var Ka=new c;Ka.doid(0);Ka.dnad(0);Ka.omi(!0);T.iman(Ka);var La=new c;La.doid(19);La.dnad(-4);La.omi(!0);T.iman(La);x.dnaa(T);var G=new e;G.imao(t);G.dono("iioi");G.dnio(!1);G.dmnd(1);G.dnan(!0);var Ma=new c;Ma.doid(0);Ma.dnad(0);Ma.omi(!0);G.iman(Ma);var Na=new c;Na.doid(22);Na.dnad(-4);Na.omi(!0);G.iman(Na);var Oa=new c;Oa.doid(24);Oa.dnad(-4.7894736842105265);Oa.omi(!0);G.iman(Oa);x.dnaa(G);var U=new e;U.imao(ia);
U.dono("iioi");U.dnio(!1);U.dmnd(1);U.dnan(!0);var Pa=new c;Pa.doid(0);Pa.dnad(0);Pa.omi(!0);U.iman(Pa);var Qa=new c;Qa.doid(24);Qa.dnad(-8);Qa.omi(!0);U.iman(Qa);x.dnaa(U);var V=new e;V.imao(ga);V.dono("iioi");V.dnio(!1);V.dmnd(1);V.dnan(!0);var Ra=new c;Ra.doid(0);Ra.dnad(0);Ra.omi(!0);V.iman(Ra);var Sa=new c;Sa.doid(30);Sa.dnad(-5);Sa.omi(!0);V.iman(Sa);x.dnaa(V);var H=new e;H.imao(fa);H.dono("iioi");H.dnio(!1);H.dmnd(1);H.dnan(!0);var Ta=new c;Ta.doid(0);Ta.dnad(0);Ta.omi(!0);H.iman(Ta);var Ua=
new c;Ua.doid(33);Ua.dnad(-4);Ua.omi(!0);H.iman(Ua);var Va=new c;Va.doid(35);Va.dnad(-4.703703703703704);Va.omi(!0);H.iman(Va);x.dnaa(H);var W=new e;W.imao(v);W.dono("iioi");W.dnio(!1);W.dmnd(1);W.dnan(!0);var Wa=new c;Wa.doid(0);Wa.dnad(0);Wa.omi(!0);W.iman(Wa);var Xa=new c;Xa.doid(35);Xa.dnad(-6);Xa.omi(!0);W.iman(Xa);x.dnaa(W);var X=new e;X.imao(f);X.dono("iioi");X.dnio(!1);X.dmnd(1);X.dnan(!0);var Ya=new c;Ya.doid(0);Ya.dnad(0);Ya.omi(!0);X.iman(Ya);var Za=new c;Za.doid(38);Za.dnad(-3);Za.omi(!0);
X.iman(Za);x.dnaa(X);var Y=new e;Y.imao(y);Y.dono("iioi");Y.dnio(!1);Y.dmnd(1);Y.dnan(!0);var $a=new c;$a.doid(0);$a.dnad(0);$a.omi(!0);Y.iman($a);var ab=new c;ab.doid(41);ab.dnad(7);ab.omi(!0);Y.iman(ab);x.dnaa(Y);var Z=new e;Z.imao(r);Z.dono("iioi");Z.dnio(!1);Z.dmnd(1);Z.dnan(!0);var bb=new c;bb.doid(0);bb.dnad(0);bb.omi(!0);Z.iman(bb);var cb=new c;cb.doid(45);cb.dnad(11);cb.omi(!0);Z.iman(cb);x.dnaa(Z);var $=new e;$.imao(l);$.dono("iioi");$.dnio(!1);$.dmnd(1);$.dnan(!0);var db=new c;db.doid(0);
db.dnad(0);db.omi(!0);$.iman(db);var eb=new c;eb.doid(50);eb.dnad(-10);eb.omi(!0);$.iman(eb);x.dnaa($);var aa=new e;aa.imao(h);aa.dono("iioi");aa.dnio(!1);aa.dmnd(1);aa.dnan(!0);var fb=new c;fb.doid(0);fb.dnad(0);fb.omi(!0);aa.iman(fb);var gb=new c;gb.doid(25);gb.dnad(-3);gb.omi(!0);aa.iman(gb);x.dnaa(aa);var ba=new e;ba.imao(z);ba.dono("iidi");ba.dnio(!1);ba.dmnd(5);ba.dnan(!0);var hb=new c;hb.doid(0);hb.dnad(0);hb.omi(!0);ba.iman(hb);var ib=new c;ib.doid(600);ib.dnad(80);ib.omi(!0);ba.iman(ib);
J.dnaa(ba);var ca=new e;ca.imao(x);ca.dono("iidi");ca.dnio(!1);ca.dmnd(12);ca.dnan(!0);var jb=new c;jb.doid(0);jb.dnad(0);jb.omi(!0);ca.iman(jb);var kb=new c;kb.doid(600);kb.dnad(60);kb.omi(!0);ca.iman(kb);J.dnaa(ca);var A=new e;A.imao(ea);A.dono("iiom");A.dnio(!1);A.dmnd(1);A.dnan(!0);var lb=new c;lb.doid(0);lb.dnad([1,1]);lb.omi(!0);A.iman(lb);var mb=new c;mb.doid(155);mb.dnad([1,1]);mb.omi(!0);A.iman(mb);var nb=new c;nb.doid(164);nb.dnad([1.0113636363636365,0.6363636363636367]);nb.omi(!0);A.iman(nb);
var ob=new c;ob.doid(401);ob.dnad([1.0113636363636365,0.6363636363636367]);ob.omi(!0);A.iman(ob);var pb=new c;pb.doid(412);pb.dnad([1,1]);pb.omi(!0);A.iman(pb);var qb=new c;qb.doid(600);qb.dnad([1,1]);qb.omi(!0);A.iman(qb);J.dnaa(A);var C=new e;C.imao(ha);C.dono("iiom");C.dnio(!1);C.dmnd(1);C.dnan(!0);var rb=new c;rb.doid(0);rb.dnad([1,1]);rb.omi(!0);C.iman(rb);var sb=new c;sb.doid(154);sb.dnad([1,1]);sb.omi(!0);C.iman(sb);var tb=new c;tb.doid(162);tb.dnad([0.9361702127659574,0.5593220338983063]);
tb.omi(!0);C.iman(tb);var ub=new c;ub.doid(400);ub.dnad([0.9361702127659574,0.5593220338983063]);ub.omi(!0);C.iman(ub);var vb=new c;vb.doid(412);vb.dnad([1,1]);vb.omi(!0);C.iman(vb);J.dnaa(C);var da=new e;da.imao(ja);da.dono("iidi");da.dnio(!1);da.dmnd(6);da.dnan(!0);var wb=new c;wb.doid(0);wb.dnad(0);wb.omi(!0);da.iman(wb);var xb=new c;xb.doid(600);xb.dnad(80);xb.omi(!0);da.iman(xb);J.dnaa(da);var D=new e;D.imao(k);D.dono("iiia");D.dnio(!1);D.dmnd(1);D.dnan(!0);var yb=new c;yb.doid(0);yb.dnad([0,
0,0]);yb.omi(!0);D.iman(yb);var zb=new c;zb.doid(153);zb.dnad([0,0,0]);zb.omi(!0);D.iman(zb);var Ab=new c;Ab.doid(165);Ab.dnad([-4.0816326530612255,0,0]);Ab.omi(!0);D.iman(Ab);var Bb=new c;Bb.doid(600);Bb.dnad([0,0,0]);Bb.omi(!0);D.iman(Bb);J.dnaa(D);oad.iim().dndm(J)};jQuery(document).ready(function(){Fb.iian();f.mai()||oad.aim()})})();