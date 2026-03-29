import React from 'react';
import {
  Phone,
  Mail,
  ChevronRight,
  ArrowRight,
  CheckCircle2,
  Clock,
  Star,
  Scale,
  FlaskConical,
  Activity,
  Heart,
  ShieldCheck,
  Award,
  Calendar,
  ChevronDown,
  MapPin,
  Brain,
  Zap,
  Quote,
  Users,
  Gift,
  AlertCircle,
  Lock
} from 'lucide-react';

// --- Font Setup via CSS ---
const fontStyles = `
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap');

  .font-heading {
    font-family: 'Lora', serif;
  }

  .font-body {
    font-family: 'Inter', sans-serif;
  }
`;

// --- Header Component ---
const Header = () => {
  return (
    <header className="bg-white shadow-sm sticky top-0 z-50 font-body">
      <div className="bg-[#b1976d] text-white py-2 px-4">
        <div className="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2 text-sm">
          <div className="flex items-center gap-6">
            <a href="tel:+3612345678" className="flex items-center gap-2 hover:text-white/80 transition-colors font-medium">
              <Phone className="w-4 h-4" />
              +36 1 234 5678
            </a>
            <a href="mailto:info@drmedgyesi.hu" className="flex items-center gap-2 hover:text-white/80 transition-colors font-medium">
              <Mail className="w-4 h-4" />
              info@drmedgyesi.hu
            </a>
          </div>
          <div className="text-white/90 font-medium">
            Hétfő - Péntek: 8:00 - 18:00
          </div>
        </div>
      </div>

      <nav className="max-w-7xl mx-auto px-4 py-4">
        <div className="flex justify-between items-center">
          <div className="text-2xl text-[#b1976d] font-heading">
            <strong>Dr. Medgyesi</strong>
            <div className="text-xs text-gray-600 font-body tracking-wider uppercase mt-1">Integrált Orvoslás</div>
          </div>

          <div className="hidden md:flex items-center gap-8">
            <a href="#kiertekeles" className="text-gray-700 hover:text-[#b1976d] transition-colors font-semibold">Scorecard</a>
            <a href="#eredmenyek" className="text-gray-700 hover:text-[#b1976d] transition-colors font-semibold">Eredmények</a>
            <a href="#rolam" className="text-gray-700 hover:text-[#b1976d] transition-colors font-semibold">Rólam</a>
            <a href="#ajanlat" className="text-[#b1976d] hover:text-[#9a835c] transition-colors font-bold flex items-center gap-1">
              <Clock className="w-4 h-4" /> Limitált Ajánlat
            </a>
          </div>

          <button className="bg-gray-900 text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition-all shadow-md font-bold text-sm uppercase tracking-wider">
            Időpont Foglalás
          </button>
        </div>
      </nav>
    </header>
  );
};

// --- Updated Hero Section ---
const Hero = () => {
  return (
    <section className="bg-gradient-to-br from-[#fdfbf8] via-white to-[#fdfbf8] py-20 px-4 font-body border-b border-gray-100">
      <div className="max-w-7xl mx-auto">
        <div className="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <div className="inline-flex items-center gap-2 bg-[#f4f0ea] text-[#b1976d] px-4 py-2 rounded-full mb-6 border border-[#e8e0d4]">
              <Award className="w-4 h-4" />
              <span className="text-sm font-bold uppercase tracking-wider">25+ év szakmai tapasztalat</span>
            </div>

            <h1 className="text-5xl md:text-6xl mb-6 text-gray-900 font-heading font-bold leading-tight">
              Visszanyerheti <span className="text-[#b1976d] italic">egészségét</span> és életminőségét.
            </h1>

            <p className="text-xl text-gray-600 mb-8 leading-relaxed font-medium">
              Dr. Medgyesi integrált orvosi megközelítéssel segít visszanyerni vitalitását,
              kezelve a problémák gyökerét, nem csupán a tüneteket.
            </p>

            <div className="space-y-4 mb-10">
              <div className="flex items-start gap-3">
                <CheckCircle2 className="w-6 h-6 text-[#b1976d] flex-shrink-0 mt-0.5" />
                <p className="text-gray-800 font-medium">Személyre szabott kezelési terv 90 napon belül</p>
              </div>
              <div className="flex items-start gap-3">
                <CheckCircle2 className="w-6 h-6 text-[#b1976d] flex-shrink-0 mt-0.5" />
                <p className="text-gray-800 font-medium">Holisztikus megközelítés - test, anyagcsere, életmód</p>
              </div>
              <div className="flex items-start gap-3">
                <CheckCircle2 className="w-6 h-6 text-[#b1976d] flex-shrink-0 mt-0.5" />
                <p className="text-gray-800 font-medium">1000+ sikeres és dokumentált eset</p>
              </div>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <button className="bg-[#b1976d] text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-[#9a835c] transition-all shadow-xl hover:shadow-2xl shadow-[#b1976d]/20 flex justify-center items-center gap-2">
                Konzultáció Foglalása <ArrowRight className="w-5 h-5" />
              </button>
              <button className="bg-white border-2 border-gray-200 text-gray-800 px-8 py-4 rounded-xl text-lg font-bold hover:border-[#b1976d] transition-all flex justify-center items-center">
                Egészségügyi Értékelés
              </button>
            </div>

            <div className="mt-10 flex items-center gap-3">
              <div className="flex gap-1">
                {[1, 2, 3, 4, 5].map((star) => (
                  <Star key={star} className="w-5 h-5 fill-[#b1976d] text-[#b1976d]" />
                ))}
              </div>
              <span className="text-gray-600 font-medium">
                <strong className="text-gray-900">4.9/5</strong> átlag értékelés (250+ vélemény)
              </span>
            </div>
          </div>

          <div className="relative">
            <div className="absolute inset-0 bg-[#b1976d]/10 rounded-3xl transform rotate-3"></div>
            <img
              src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&q=80&w=800"
              alt="Dr. Medgyesi"
              className="relative rounded-3xl shadow-2xl w-full h-[600px] object-cover"
            />
            <div className="absolute bottom-8 left-8 right-8 bg-white/95 backdrop-blur-sm p-6 rounded-2xl shadow-xl border border-white">
              <Quote className="w-8 h-8 text-[#b1976d] mb-2 opacity-50" />
              <p className="text-2xl mb-2 font-heading font-bold text-gray-900 leading-snug">"Az egészség nem csak a betegség hiánya. Az egészség teljes vitalitás."</p>
              <p className="text-gray-600 font-bold tracking-wider uppercase text-sm">- Dr. Medgyesi János</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

// --- Scorecard Section (Priestley's Core Value Addition) ---
const ScorecardSection = () => {
  const scorecard = [
    {
      icon: Heart,
      title: 'Szív Egészség',
      score: '8.5/10',
      description: 'Kardiovaszkuláris rendszer és vérnyomás értékelése.',
      color: 'text-red-600'
    },
    {
      icon: Brain,
      title: 'Mentális Jólét',
      score: '7.2/10',
      description: 'Kognitív funkciók, stressz szint és alvásminőség.',
      color: 'text-gray-800'
    },
    {
      icon: Activity,
      title: 'Fizikai Kondíció',
      score: '6.8/10',
      description: 'Erőnlét, állóképesség és ízületi mobilitás mérése.',
      color: 'text-emerald-600'
    },
    {
      icon: Zap,
      title: 'Energia Szint',
      score: '7.5/10',
      description: 'Anyagcsere stabilitás, vitalitás és helyreállítás.',
      color: 'text-[#b1976d]'
    }
  ];

  return (
    <section id="kiertekeles" className="py-24 px-4 bg-white font-body">
      <div className="max-w-7xl mx-auto">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl mb-6 text-gray-900 font-heading font-bold">
            Tudja pontosan, hogy áll az <span className="text-[#b1976d] italic">egészsége?</span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
            Ingyenes Egészségügyi Scorecard™. Mérje fel állapotát 3 perc alatt tudományosan megalapozott módszertanunkkal, és tudja meg, mely területeken érdemes javítania.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
          {scorecard.map((item, index) => (
            <div key={index} className="bg-[#fdfbf8] p-8 rounded-3xl hover:shadow-xl transition-all border border-gray-100 hover:border-[#b1976d]/30 group">
              <div className="bg-white w-16 h-16 rounded-2xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                <item.icon className={`w-8 h-8 ${item.color}`} />
              </div>
              <h3 className="text-xl font-bold mb-2 text-gray-900">{item.title}</h3>
              <div className="text-3xl font-heading font-bold mb-3 text-gray-900 border-b border-gray-200 pb-3">{item.score}</div>
              <p className="text-gray-600 text-sm leading-relaxed">{item.description}</p>
            </div>
          ))}
        </div>

        <div className="bg-gray-900 rounded-[2.5rem] p-10 md:p-16 text-center text-white relative overflow-hidden">
          <div className="absolute top-0 right-0 w-64 h-64 bg-[#b1976d] rounded-full blur-[100px] opacity-30"></div>
          <div className="absolute bottom-0 left-0 w-64 h-64 bg-[#b1976d] rounded-full blur-[100px] opacity-20"></div>

          <div className="relative z-10">
            <h3 className="text-3xl md:text-4xl font-heading font-bold mb-4">Töltse le INGYENES Egészség Scorecard-ját</h3>
            <p className="text-xl mb-10 text-gray-300 max-w-2xl mx-auto">
              Értékelje egészségét 12 kulcsfontosságú területen. Azonnal megkapja a személyre szabott PDF jelentést és az akciótervet.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center max-w-2xl mx-auto">
              <input
                type="email"
                placeholder="Az Ön email címe"
                className="px-6 py-4 rounded-xl text-gray-900 text-lg flex-1 border-2 border-transparent focus:border-[#b1976d] focus:outline-none"
              />
              <button className="bg-[#b1976d] text-white px-8 py-4 rounded-xl text-lg font-bold hover:bg-[#9a835c] transition-all shadow-lg flex items-center justify-center gap-2">
                Kérem a kiértékelést <ArrowRight className="w-5 h-5" />
              </button>
            </div>
            <p className="mt-6 text-sm text-gray-400 flex items-center justify-center gap-2">
              <Lock className="w-4 h-4" /> Az adatai biztonságban vannak. Nem osztjuk meg harmadik féllel.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

// --- Updated Social Proof Section ---
const SocialProof = () => {
  const testimonials = [
    {
      name: 'Nagy Katalin',
      role: 'Vállalkozó, 42 éves',
      image: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&h=200&fit=crop',
      quote: '6 hónapja küszködtem krónikus fáradtsággal. Dr. Medgyesi 90 nap alatt visszaadta az energiámat. Most jobban érzem magam, mint 10 éve.',
      result: 'Energiaszint: +85%',
      stars: 5
    },
    {
      name: 'Kovács Péter',
      role: 'Informatikus, 38 éves',
      image: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&h=200&fit=crop',
      quote: 'Az integrált megközelítés mindent megváltoztatott. Nem csak a vércukor szintem javult, hanem az életminőségem is teljesen átformálódott.',
      result: 'HbA1c csökkenés: 2.1%',
      stars: 5
    },
    {
      name: 'Szabó Eszter',
      role: 'Tanár, 45 éves',
      image: 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=200&h=200&fit=crop',
      quote: 'Évek óta próbáltam fogyni sikertelenül. A doktor úr segítségével nemcsak 18 kilót adtam le, de megtanultam tartósan egészségesen élni.',
      result: '-18 kg, 5 hónap alatt',
      stars: 5
    }
  ];

  const media = [
    { name: 'Forbes', label: 'Forbes' },
    { name: 'Medical Tribune', label: 'Medical Tribune' },
    { name: 'Egészség Magazin', label: 'Egészség Magazin' },
    { name: 'Wellness', label: 'Wellness.hu' }
  ];

  return (
    <section id="eredmenyek" className="py-24 px-4 bg-[#fdfbf8] font-body">
      <div className="max-w-7xl mx-auto">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl mb-6 text-gray-900 font-heading font-bold">
            <span className="text-[#b1976d]">1000+ ember</span> visszanyerte az egészségét.
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto font-medium">
            Valódi emberek, dokumentált és mérhető eredmények. Olvassa el, hogyan változott meg pácienseink élete az integratív medicina hatására.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8 mb-20">
          {testimonials.map((testimonial, index) => (
            <div key={index} className="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
              <div className="flex items-center gap-4 mb-6 pb-6 border-b border-gray-100">
                <img
                  src={testimonial.image}
                  alt={testimonial.name}
                  className="w-16 h-16 rounded-full object-cover shadow-inner"
                />
                <div>
                  <h4 className="text-gray-900 font-bold text-lg">{testimonial.name}</h4>
                  <p className="text-gray-500 text-sm font-medium">{testimonial.role}</p>
                  <div className="flex gap-1 mt-1">
                    {Array.from({ length: testimonial.stars }).map((_, i) => (
                      <Star key={i} className="w-4 h-4 fill-[#b1976d] text-[#b1976d]" />
                    ))}
                  </div>
                </div>
              </div>

              <div className="relative">
                <Quote className="w-10 h-10 text-gray-100 absolute -top-4 -left-2 z-0" />
                <p className="text-gray-700 mb-8 leading-relaxed relative z-10 italic">
                  "{testimonial.quote}"
                </p>
              </div>

              <div className="bg-[#f9f7f4] text-gray-900 px-5 py-3 rounded-xl border border-[#e8e0d4] text-sm font-bold flex items-center justify-between">
                <span className="text-gray-500 uppercase tracking-wider text-xs">Eredmény:</span>
                <span className="text-[#b1976d]">{testimonial.result}</span>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center mb-16">
          <p className="text-gray-500 font-bold uppercase tracking-widest text-sm mb-8">Szakmai megjelenések és elismerések</p>
          <div className="flex flex-wrap justify-center items-center gap-6 md:gap-12 opacity-70 grayscale">
            {media.map((outlet, index) => (
              <div key={index} className="text-2xl font-heading font-bold text-gray-800">
                {outlet.label}
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

// --- Urgency Section (Oversubscribed Framework) ---
const UrgencySection = () => {
  return (
    <section id="ajanlat" className="py-24 px-4 bg-gray-900 font-body relative overflow-hidden">
      {/* Decorative background elements */}
      <div className="absolute top-0 right-0 w-1/2 h-full bg-[#b1976d]/10 skew-x-12 -mr-24 blur-3xl"></div>

      <div className="max-w-5xl mx-auto relative z-10">
        <div className="bg-white rounded-[2.5rem] shadow-2xl overflow-hidden">
          <div className="bg-gradient-to-r from-gray-900 to-gray-800 text-white p-10 md:p-12 text-center border-b-4 border-[#b1976d]">
            <AlertCircle className="w-12 h-12 mx-auto mb-6 text-[#b1976d]" />
            <h2 className="text-3xl md:text-5xl mb-4 font-heading font-bold">
              Korlátozott Ajánlat – <span className="text-[#b1976d] italic">Csak Erre a Hétre</span>
            </h2>
            <p className="text-xl text-gray-300 max-w-2xl mx-auto">
              Az egészség nem vár. Ne halassza holnapra azt a döntést, ami megváltoztathatja az életét.
            </p>
          </div>

          <div className="p-8 md:p-12">
            <div className="grid md:grid-cols-3 gap-8 mb-12">
              <div className="text-center p-6 bg-[#fdfbf8] rounded-2xl border border-gray-100">
                <Clock className="w-10 h-10 text-[#b1976d] mx-auto mb-4" />
                <h3 className="text-lg font-bold mb-2 text-gray-900 uppercase tracking-wider">48 Órás Időablak</h3>
                <p className="text-gray-600 text-sm">
                  Ez a kiemelt bónusz ajánlat <strong className="text-gray-900">március 28-án éjfélkor</strong> lejár.
                </p>
              </div>

              <div className="text-center p-6 bg-[#fdfbf8] rounded-2xl border border-gray-100">
                <Users className="w-10 h-10 text-[#b1976d] mx-auto mb-4" />
                <h3 className="text-lg font-bold mb-2 text-gray-900 uppercase tracking-wider">Limitált Helyek</h3>
                <p className="text-gray-600 text-sm">
                  A magas minőség érdekében havonta mindössze <strong className="text-gray-900">5 új pácienst</strong> fogadunk.
                </p>
              </div>

              <div className="text-center p-6 bg-[#fdfbf8] rounded-2xl border border-gray-100">
                <Gift className="w-10 h-10 text-[#b1976d] mx-auto mb-4" />
                <h3 className="text-lg font-bold mb-2 text-gray-900 uppercase tracking-wider">Exkluzív Bónusz</h3>
                <p className="text-gray-600 text-sm">
                  <strong className="text-gray-900">49.900 Ft értékű</strong> kiegészítő csomag ajándékba a csatlakozóknak.
                </p>
              </div>
            </div>

            <div className="bg-[#fdfbf8] rounded-3xl p-8 md:p-10 mb-10 border border-[#e8e0d4]">
              <h3 className="text-2xl mb-6 text-gray-900 font-heading font-bold text-center flex items-center justify-center gap-3">
                <Gift className="w-6 h-6 text-[#b1976d]" /> Ha ma foglal, INGYEN megkapja:
              </h3>
              <ul className="space-y-4 max-w-2xl mx-auto">
                <li className="flex items-start gap-4">
                  <div className="bg-white rounded-full p-1 shadow-sm mt-0.5">
                    <CheckCircle2 className="w-5 h-5 text-[#b1976d]" />
                  </div>
                  <div>
                    <span className="text-gray-900 font-bold">Személyre szabott Supplement Terv</span>
                    <span className="block text-gray-500 text-sm mt-1">(19.900 Ft érték)</span>
                  </div>
                </li>
                <li className="flex items-start gap-4">
                  <div className="bg-white rounded-full p-1 shadow-sm mt-0.5">
                    <CheckCircle2 className="w-5 h-5 text-[#b1976d]" />
                  </div>
                  <div>
                    <span className="text-gray-900 font-bold">30 Napos Étkezési Program receptekkel</span>
                    <span className="block text-gray-500 text-sm mt-1">(15.000 Ft érték)</span>
                  </div>
                </li>
                <li className="flex items-start gap-4">
                  <div className="bg-white rounded-full p-1 shadow-sm mt-0.5">
                    <CheckCircle2 className="w-5 h-5 text-[#b1976d]" />
                  </div>
                  <div>
                    <span className="text-gray-900 font-bold">Otthoni Labor Kit házhozszállítással</span>
                    <span className="block text-gray-500 text-sm mt-1">(15.000 Ft érték)</span>
                  </div>
                </li>
              </ul>
            </div>

            <div className="text-center">
              <div className="inline-flex items-center gap-2 bg-red-50 text-red-800 px-6 py-2 rounded-full mb-8 font-medium">
                <Clock className="w-4 h-4" /> Még <strong className="font-bold">5 szabad időpont</strong> van erre a hétre
              </div>

              <button className="bg-[#b1976d] text-white px-8 md:px-12 py-5 rounded-xl text-xl font-bold hover:bg-[#9a835c] transition-all shadow-xl block w-full max-w-xl mx-auto mb-6 transform hover:-translate-y-1">
                Foglalok Még Ma – Ajándékokkal
              </button>

              <p className="text-gray-600 mb-2 font-medium">
                vagy hívjon azonnal: <strong className="text-gray-900 text-lg">+36 1 234 5678</strong>
              </p>
              <p className="text-sm text-gray-400 mt-6">Az ajánlat visszavonásig, de legkésőbb március 28. 23:59-ig érvényes.</p>
            </div>
          </div>
        </div>

        <div className="mt-16 text-center text-white">
          <p className="text-[#b1976d] font-bold uppercase tracking-widest mb-4">
            Miért nem várhat tovább?
          </p>
          <p className="text-gray-300 max-w-3xl mx-auto text-lg leading-relaxed">
            Minden nap, amit várakozással tölt, egy újabb nap, amikor az egészségi állapota rontja az életminőségét.
            Pácienseink átlagosan 3 évet vártak, mielőtt szakszerű segítséget kértek. Ne kövesse el ezt a hibát.
            <strong className="text-white block mt-4 text-2xl font-heading">Ma elindulhat a változás útján.</strong>
          </p>
        </div>
      </div>
    </section>
  );
};

// --- Footer ---
const Footer = () => {
  return (
    <footer className="bg-gray-950 text-gray-400 py-16 font-body">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-4 gap-12 mb-12">
          <div className="col-span-1 md:col-span-1 text-center md:text-left">
            <div className="text-[#b1976d] text-2xl font-bold mb-6 font-heading">Dr. Medgyesi</div>
            <p className="text-sm leading-relaxed">
              Integratív orvoslás és testsúlycsökkentő programok tudományos alapokon, Budapesten.
            </p>
          </div>
          <div>
            <h4 className="text-white font-bold mb-6 uppercase tracking-wider text-sm">Navigáció</h4>
            <ul className="space-y-4 text-sm">
              <li><a href="#kiertekeles" className="hover:text-[#b1976d] transition-colors">Egészség Scorecard</a></li>
              <li><a href="#eredmenyek" className="hover:text-[#b1976d] transition-colors">Páciens Eredmények</a></li>
              <li><a href="#ajanlat" className="hover:text-[#b1976d] transition-colors">Limitált Ajánlat</a></li>
              <li><a href="#" className="hover:text-[#b1976d] transition-colors">Adatkezelés</a></li>
            </ul>
          </div>
          <div>
            <h4 className="text-white font-bold mb-6 uppercase tracking-wider text-sm">Kapcsolat</h4>
            <ul className="space-y-4 text-sm">
              <li className="flex items-center gap-3"><MapPin className="h-4 w-4 text-[#b1976d]" /> 1123 Budapest, Alkotás u. 1.</li>
              <li className="flex items-center gap-3"><Phone className="h-4 w-4 text-[#b1976d]" /> +36 1 234 5678</li>
              <li className="flex items-center gap-3"><Mail className="h-4 w-4 text-[#b1976d]" /> info@drmedgyesi.hu</li>
            </ul>
          </div>
          <div>
            <h4 className="text-white font-bold mb-6 uppercase tracking-wider text-sm">Bejelentkezés</h4>
            <p className="text-xs mb-4">Foglalja le időpontját online a nap 24 órájában!</p>
            <button className="w-full bg-[#b1976d] text-white py-3 rounded-xl font-bold hover:bg-[#9a835c] transition-all">
              Időpontot foglalok
            </button>
          </div>
        </div>
        <div className="border-t border-gray-900 pt-8 flex flex-col md:flex-row justify-between items-center text-xs">
          <p>© 2026 Dr. Medgyesi János – Minden jog fenntartva.</p>
          <div className="flex gap-6 mt-4 md:mt-0">
            <span>Orvosi nyilvántartási szám: 123456</span>
          </div>
        </div>
      </div>
    </footer>
  );
};

// --- Main App Component ---
export default function App() {
  return (
    <>
      <style>{fontStyles}</style>
      <div className="min-h-screen bg-white text-gray-900 selection:bg-[#b1976d]/20 selection:text-[#b1976d]">
        <Header />
        <main>
          <Hero />
          <ScorecardSection />
          <SocialProof />
          <UrgencySection />
        </main>
        <Footer />
      </div>
    </>
  );
}
