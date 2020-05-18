<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            ['catId' => 1, 'nome' => 'Smartphone', 'parId' => 0, 'desc' => 'IOS, Android'],
            ['catId' => 2, 'nome' => 'Pc', 'parId' => 0, 'desc' => 'MacOS, Windows, ChromeOS'],
            ['catId' => 3, 'nome' => 'Tablet', 'parId' => 0, 'desc' => 'iOS_ipadOS, Android'],
            ['catId' => 4, 'nome' => 'IOS', 'parId' => 1, 'desc' => 'Prodotti con sistema operativo: IOS'],
            ['catId' => 5, 'nome' => 'Android', 'parId' => 1, 'desc' => 'Prodotti con sistema operativo: Android'],
            ['catId' => 6, 'nome' => 'MacOS', 'parId' => 2, 'desc' => 'Prodotti con sistema operativo: MacOS'],
            ['catId' => 7, 'nome' => 'Windows', 'parId' => 2, 'desc' => 'Prodotti con sistema operativo: Windows'],
            ['catId' => 8, 'nome' => 'ChromeOS', 'parId' => 2, 'desc' => 'Prodotti con sistema operativo: ChromeOS'],
            ['catId' => 9, 'nome' => 'IOS_IpadOS', 'parId' => 3, 'desc' => 'Prodotti con sistema operativo: IOS_IpadOS'],
            ['catId' => 10, 'nome' => 'MacOS', 'parId' => 3, 'desc' => 'Prodotti con sistema operativo: MacOS'],
        ]);

        DB::table('product')->insert([
            ['nome' => 'APPLE iPhone 8', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 4.7, 'risDisplay' => '1334x750', 
                'processore' => 'Apple A11 Bionic', 'ram' => 2, 'memoria' => 64, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => '12 MP, f/1.8, 28mm, PDAF, OIS, quad-LED dual tone flash, sensore da 1/3″+ Frontale 7 MP, f/2.2',
                'descShort' => 'Dimensioni display: 4.7
                Risoluzione display: 1334 x 750
                Processore: Apple A11 Bionic
                Ram: 2
                Memoria: 64
                Scheda grafica: Proprietaria Apple
                Fotocamera: 12 MP, f/1.8, 28mm, PDAF, OIS, quad-LED dual tone flash, sensore da 1/3″+ Frontale 7 MP, f/2.2
                OS: iOS 11', 
                'descLong' => 'Splendida intelligenza
                iPhone 8 è stato creato con un inedito design in vetro, una versione evoluta della fotocamera più amata al mondo e il chip più potente e intelligente che uno smartphone abbia mai avuto. Dotato di ricarica wireless e tecnologie di realtà aumentata mai viste prima. Ecco iPhone 8, una nuova generazione di smartphone.
                Un iPhone nato dal vetro
                Il nuovo iPhone 8 è avvolto dal vetro più resistente mai visto su uno smartphone, contornato da alluminio aerospaziale. Puoi scegliere tra nuove splendide finiture in girgio siderale, argento e oro.
                Resistenza all acqua e alla polvere
                Progettato con precisione millimetrica per resistenza a schizzi, gocce e polvere.
                Come migliorare la fotocamera piu amata al mondo
                Su iPhone 8 la fotocamera da 12MP è ancora più evoluta: ha un sensore più ampio e veloce, un nuovo filtro colore, pixel più profondi e la stabilizzazione ottica dell immagine per foto e video.
                A11 Bionic
                Il chip più potente e intelligente mai creato per uno smartphone. Ha quattro core ad alta efficienza fino al 70% più veloci del chip A10 Fusion. E due core ad alte prestazioni fino al 25% più scattanti. Il performance controller di seconda generazionefornisce più potenza quando ti serve, e garantisce sempre la stessa grandeautonomia
                Realtà aumentata
                Il tuo modo di vedere il mondo sta per cambiare.Straordinarie esperienze di realtà aumentata ti aspettano su giochi e app,grazie alla potenza di A11 Bionic.',
                'prezzo' => 559, 'scontoPerc' => 9, 'sconto' => 0, 'image' => 'iphone8.jpg'],
            ['nome' => 'APPLE iPhone 8 plus', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 5.5, 'risDisplay' => '1920x1080', 
                'processore' => 'Apple A11 Bionic', 'ram' => 3, 'memoria' => 64, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'dual 12 MP, (28mm f/1.8, OIS + 56mm f/2.8), PDAF, 2x optical zoom + Frontale 7 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 5.5
                Risoluzione display: 1920 x 1080
                Processore: Apple A11 Bionic
                Ram: 3
                Memoria: 64
                Scheda grafica: Proprietaria Apple
                Fotocamera: dual 12 MP, (28mm f/1.8, OIS + 56mm f/2.8), PDAF, 2x optical zoom + Frontale 7 MP, apertura f/2.2
                OS: iOS 11',
                'descLong' => 'Splendida intelligenza
                iPhone 8 Plus è stato creato con un inedito design in vetro, una versione evoluta della fotocamera più amata al mondo e il chip più potente e intelligente che uno smartphone abbia mai avuto. Inoltre dotato di ricarica wireless e tecnologie di realtà aumentata mai viste prima. Ecco iPhone 8, una nuova generazione di smartphone.
                Un iPhone nato dal vetro
                Il nuovo iPhone 8 Plus è avvolto dal vetro più resistente mai visto su uno smartphone, contornato da alluminio aerospaziale. Puoi scegliere tra nuove splendide finiture in girgio siderale, argento e oro.
                Resistenza all acqua e alla polvere
                Progettato con precisione millimetrica per resistenza a schizzi, gocce e polvere.
                Come migliorare la fotocamera piu amata al mondo
                Su iPhone 8 Plus la fotocamera da 12MP è ancora più evoluta: ha un sensore più ampio e veloce, un nuovo filtro colore, pixel più profondi e la stabilizzazione ottica dell immagine per foto e video.
                Presente anche una fotocamera 2x.
                A11 Bionic
                Il chip più potente e intelligente mai creato per uno smartphone. Ha quattro core ad alta efficienza fino al 70% più veloci del chip A10 Fusion. E due core ad alte prestazioni fino al 25% più scattanti. Il performance controller di seconda generazionefornisce più potenza quando ti serve, e garantisce sempre la stessa grandeautonomia
                Realtà aumentata
                Il tuo modo di vedere il mondo sta per cambiare.Straordinarie esperienze di realtà aumentata ti aspettano su giochi e app,grazie alla potenza di A11 Bionic.
                ',
                'prezzo' => 659, 'scontoPerc' => 9, 'sconto' => 0, 'image' => 'iphone8plus.jpeg'],
            ['nome' => 'APPLE iPhone X', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 5.8, 'risDisplay' => '1125x2436', 
                'processore' => 'Apple A11 Bionic', 'ram' => 3, 'memoria' => 64, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'doppia fotocamera da 12 megapixel, con aperture f/1.8 (grandangolo) e f/2.4 (teleobiettivo), con zoom ottico digitale fino a 10X + Frontale 7 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 5.8
                Risoluzione display: 1125 x 2436
                Processore: Apple A11 Bionic
                Ram: 3
                Memoria: 64
                Scheda grafica: Proprietaria Apple
                Fotocamera: doppia fotocamera da 12 megapixel, con aperture f/1.8 (grandangolo) e f/2.4 (teleobiettivo), con zoom ottico digitale fino a 10X + Frontale 7 MP, apertura f/2.2
                OS: iOS 11',
                'descLong' => 'Il dispositivo è fornito della versione del sistema operativo iOS 11 e implementa, fra le tante novità, il Face ID, un sistema che attraverso la fotocamera True Depth consente il riconoscimento facciale in 3D tramite una mappatura composta da oltre 30.000 punti invisibili che vengono proiettati sul viso dell utilizzatore. Il tutto è reso possibile da un motore neurale di cui è dotato il nuovo chip A11 Bionic. Come per il Touch ID, i dati non saranno condivisi con Apple né memorizzati su iCloud o condivisi con le App; resteranno archiviati nel dispositivo dell acquirente e criptati nel nuovo chip A11 Bionic. La mappatura viene trasformata in una rappresentazione matematica, criptata, grazie all architettura di sicurezza Secure Enclave.
                Il Face ID ha una possibilità di disallineamento pari a 1:1.000.000, a differenza del Touch ID, per il quale è di 1:50.000.
                Lo smartphone è caratterizzato da un design nettamente rinnovato nella parte anteriore, che vede l implementazione di uno schermo con tecnologia OLED da 5,8 pollici, che percorre l intera superficie frontale del dispositivo, lasciando spazio unicamente a una piccola zona multifunzionale che vedrà implementati numerosi nuovi sensori.
                Tra le principali nuove caratteristiche vi è inoltre una doppia fotocamera posteriore da 12 megapixel con depth sensing.
                iPhone X è dotato di certificazione IP67.',
                'prezzo' => 839, 'scontoPerc' => 10, 'sconto' => 0, 'image' => 'iphonex.jpg'],
            ['nome' => 'APPLE iPhone XR', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 6.1, 'risDisplay' => '828x1792', 
                'processore' => 'Apple A12 Bionic', 'ram' => 3, 'memoria' => 128, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'fotocamera da 12 megapixel, con aperture f/2.55 + Frontale 7 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 6.1
                Risoluzione display: 828x1792
                Processore: Apple A12 Bionic
                Ram: 3
                Memoria: 128
                Scheda grafica: Proprietaria Apple
                Fotocamera: fotocamera da 12 megapixel, con aperture f/2.55 + Frontale 7 MP, apertura f/2.2
                OS: iOS 12',
                'descLong' => 'Nasce Liquid Retina.
                Il nuovo LCD di iPhone XR è il più evoluto del settore. Grazie a un innovativo sistema di retroilluminazione, si estende fino agli angoli estremi del dispositivo per darti colori realistici da un bordo all’altro del display.
                Eccezionale anche nei materiali.
                Il vetro frontale più robusto mai usato per uno smartphone. Profilo in alluminio aerospaziale lavorato con macchinari ad alta precisione. Resistenza all’acqua e alla polvere. E sei nuovi, bellissimi colori.
                Face ID evoluto.
                Tenere i tuoi dati al sicuro è facile, quando la tua password è il tuo volto: per sbloccare l’iPhone, fare login nelle app e pagare i tuoi acquisti ti basta uno sguardo. È la forma di autenticazione facciale più sicura mai creata per uno smartphone, e adesso è più veloce che mai.
                A12 Bionic. Ancora più intelligenza.
                È il chip per smartphone più intelligente e potente che ci sia: il Neural Engine di ultima generazione sviluppato da Apple ti dà straordinarie esperienze in realtà aumentata, splendidi ritratti con controllo della profondità e tanta velocità in tutto quello che fai.
                Un sistema fotografico rivoluzionario.
                La fotocamera più amata al mondo inaugura una nuova era della fotografia: un innovativo sensore, insieme al processore ISP e al Neural Engine, ti aiuta a creare immagini di una bellezza mai vista.
                Come iPhone non c’è nessuno.
                Dietro a ogni iPhone ci sono decisioni precise che lo rendono unico: dalla scelta dei processi produttivi a quella di progettarlo fin dall’inizio pensando alla sicurezza e alla privacy, fino al modo responsabile in cui ricicliamo le parti che lo compongono.',
                'prezzo' => 739, 'scontoPerc' => 5, 'sconto' => 0, 'image' => 'iphonexr.jpg'],
            ['nome' => 'APPLE iPhone XS', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 5.8, 'risDisplay' => '2436x1125', 
                'processore' => 'Apple A12 Bionic', 'ram' => 4, 'memoria' => 256, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'doppia fotocamera da 12 megapixel, con apertura f/1.8 (grandangolo) e apertura f/2.4 (teleobiettivo) + Frontale 7 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 5.8
                Risoluzione display: 2436 x 1125
                Processore: Apple A12 Bionic
                Ram: 4
                Memoria: 256
                Scheda grafica: Proprietaria Apple
                Fotocamera: doppia fotocamera da 12 megapixel, con apertura f/1.8 (grandangolo) e apertura f/2.4 (teleobiettivo) + Frontale 7 MP, apertura f/2.2
                OS: iOS 12', 
                'descLong' => 'Benvenuti sui grandi schermi
                Super Retina in due formati, fra cui il display più grande mai visto su un iPhone. Face ID sempre più veloce. Il chip per smartphone più potente e intelligente che ci sia. E un rivoluzionario sistema a doppia fotocamera. iPhone XS ha tutto quello che ami in un iPhone, pensato ancora più in grande.
                Super Retina. Grande e supergrande.
                Gli schermi OLED progettati per iPhone XS offrono la migliore fedeltà cromatica del settore, tecnologia HDR e neri assoluti. 
                Eccezionale anche nei materiali.
                Il vetro più robusto mai usato su uno smartphone. Un nuovo color oro, risultato di un processo di colorazione a livello atomico. Profili in acciaio chirurgico inossidabile modellati ad alta precisione. E uno standard superiore di resistenza all’acqua e alla polvere.
                Face ID evoluto.
                Tenere i tuoi dati al sicuro è facile, quando la tua password è il tuo volto: per sbloccare l’iPhone, fare login nelle app e pagare i tuoi acquisti ti basta uno sguardo. È la forma di autenticazione facciale più sicura mai creata per uno smartphone, e adesso è più veloce che mai.
                A12 Bionic. Ancora più intelligenza.
                È il chip per smartphone più intelligente e potente che ci sia: il Neural Engine di ultima generazione sviluppato da Apple ti dà straordinarie esperienze in realtà aumentata, splendidi ritratti con controllo della profondità e tanta velocità in tutto quello che fai.
                Doppia fotocamera: un sistema rivoluzionario.
                La fotocamera più amata al mondo inaugura una nuova era della fotografia: un innovativo sensore, insieme al processore ISP e al Neural Engine, ti aiuta a creare immagini di una bellezza mai vista.
                E non è tutto.
                iPhone XS ti dà connessioni 4G LTE Advanced per download velocissimi. E c’è più spazio che su qualsiasi altro iPhone: fino a 512GB.
                Come iPhone non c’è nessuno.
                Dietro a ogni iPhone ci sono decisioni precise che lo rendono unico: dalla scelta dei processi produttivi a quella di progettarlo fin dall’inizio pensando alla sicurezza e alla privacy, fino al modo responsabile in cui ricicliamo le parti che lo compongono.',
                'prezzo' => 999, 'scontoPerc' => 24, 'sconto' => 0, 'image' => 'iphonexs.jpg'],
            ['nome' => 'APPLE iPhone XS MAX', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 6.5, 'risDisplay' => '2688x1242', 
                'processore' => 'Apple A12 Bionic', 'ram' => 4, 'memoria' => 256, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'doppia fotocamera da 12 megapixel, con apertura f/1.8 (grandangolo) e apertura f/2.4 (teleobiettivo) + Frontale 7 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 6.5
                Risoluzione display: 2688 x 1242
                Processore: Apple A12 Bionic
                Ram: 4
                Memoria: 256
                Scheda grafica: Proprietaria Apple
                Fotocamera: doppia fotocamera da 12 megapixel, con apertura f/1.8 (grandangolo) e apertura f/2.4 (teleobiettivo) + Frontale 7 MP, apertura f/2.2
                OS: iOS 12', 
                'descLong' => 'Benvenuti sui grandi schermi
                Super Retina in due formati, fra cui il display più grande mai visto su un iPhone. Face ID sempre più veloce. Il chip per smartphone più potente e intelligente che ci sia. E un rivoluzionario sistema a doppia fotocamera. iPhone XS Max ha tutto quello che ami in un iPhone, pensato ancora più in grande.
                Super Retina. Grande e supergrande.
                Gli schermi OLED progettati per iPhone XS offrono la migliore fedeltà cromatica del settore, tecnologia HDR e neri assoluti. E il display di iPhone XS Max è il più grande che un iPhone abbia mai avuto.
                Eccezionale anche nei materiali.
                Il vetro più robusto mai usato su uno smartphone. Un nuovo color oro, risultato di un processo di colorazione a livello atomico. Profili in acciaio chirurgico inossidabile modellati ad alta precisione. E uno standard superiore di resistenza all’acqua e alla polvere.
                Face ID evoluto.
                Tenere i tuoi dati al sicuro è facile, quando la tua password è il tuo volto: per sbloccare l’iPhone, fare login nelle app e pagare i tuoi acquisti ti basta uno sguardo. È la forma di autenticazione facciale più sicura mai creata per uno smartphone, e adesso è più veloce che mai.
                A12 Bionic. Ancora più intelligenza.
                È il chip per smartphone più intelligente e potente che ci sia: il Neural Engine di ultima generazione sviluppato da Apple ti dà straordinarie esperienze in realtà aumentata, splendidi ritratti con controllo della profondità e tanta velocità in tutto quello che fai.
                Doppia fotocamera: un sistema rivoluzionario.
                La fotocamera più amata al mondo inaugura una nuova era della fotografia: un innovativo sensore, insieme al processore ISP e al Neural Engine, ti aiuta a creare immagini di una bellezza mai vista.
                E non è tutto.
                iPhone XS Max ti dà connessioni 4G LTE Advanced per download velocissimi. E c’è più spazio che su qualsiasi altro iPhone: fino a 512GB.
                Come iPhone non c’è nessuno.
                Dietro a ogni iPhone ci sono decisioni precise che lo rendono unico: dalla scelta dei processi produttivi a quella di progettarlo fin dall’inizio pensando alla sicurezza e alla privacy, fino al modo responsabile in cui ricicliamo le parti che lo compongono.',
                'prezzo' => 1199, 'scontoPerc' => 8, 'sconto' => 0, 'image' => 'iphonexsmax.jpg'],
            ['nome' => 'APPLE iPhone 11', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 6.1, 'risDisplay' => '828x1792', 
                'processore' => 'Apple A13 Bionic', 'ram' => 4, 'memoria' => 64, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'doppia fotocamera da 12 megapixel, con apertura f/2.4 (ultrawide) e f/1.8 (standard) + Frontale 12 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 6.1
                Risoluzione display: 828x1792
                Processore: Apple A13 Bionic
                Ram: 4
                Memoria: 64
                Scheda grafica: Proprietaria Apple
                Fotocamera: : doppia fotocamera da 12 megapixel, con apertura f/2.4 (ultrawide) e f/1.8 (standard) + Frontale 12 MP, apertura f/2.2
                OS: iOS 13', 
                'descLong' => 'La perfetta quantità di tutto:
                Un nuovo sistema a doppia fotocamera, per inquadrare più cose intorno a te. Il chip per smart­phone più veloce che ci sia, insieme a una batteria che ti dà una giornata intera di libertà, per fare più cose ancora più a lungo. E la più alta qualità video mai raggiunta da uno smart­phone, per ricordi più belli che mai.
                Fare una brutta foto sta diventando impossibile:
                Un sistema a doppia fotocamera tutto nuovo. Passa dal grandangolo all’ultra-grandangolo e trova l’inquadratura perfetta per tutte le tue foto. L’interfaccia ridisegnata sfrutta la nuova fotocamera ultra-grandangolare per mostrarti quello che succede al di fuori dell’inquadratura e permetterti, se vuoi, di includerlo nello scatto. Puoi anche registrare video e modificarli al volo: è facile come ritoccare una foto. La fotocamera più amata al mondo ora ti dà un punto di vista completamente nuovo.
                Nuova fotocamera ultra grandangolare:
                Con il nuovo ultra grandangolo puoi ampliare il campo visivo di quattro volte. Immagina paesaggi che non finiscono mai. Il palco e il pubblico del tuo festival preferito riuniti in una sola foto. O le immagini delle tue vacanze in cui finalmente, oltre al panorama, ci sta anche la famiglia al gran completo.
                Nasce la modalità Notte:
                Fare foto con poca luce non è più un salto nel buio. La modalità Notte è una nuova funzione che si attiva in automatico per darti scatti incredibili in ambienti poco illuminati. Non c’è nemmeno bisogno del flash, perché i colori sono realistici e le tonalità della pelle naturali.
                Ritratti dai mille volti:
                Con nuovi tipi di ritratto e più modi per controllare l’illuminazione, le due fotocamere di iPhone 11 lavorano insieme per creare immagini spettacolari. E ora puoi usare la modalità Ritratto con tutti ma proprio tutti i tipi di soggetti, inclusi i tuoi amici a quattro zampe.
                Smart HDR di nuova generazione:
                Grazie all’apprendimento automatico, la funzione Smart HDR è più intelligente che mai. Riconosce le persone e le elabora in modo diverso dal resto dell’immagine, così i volti hanno splendidi punti di luce, ombre d’effetto e tonalità della pelle naturali. E il tramonto sullo sfondo è spettacolare come sempre.
                Il vetro più robusto su uno smart­phone:
                Sia il vetro frontale che quello posteriore sono rinforzati attraverso un processo a doppio scambio ionico.',
                'prezzo' => 839, 'scontoPerc' => 6, 'sconto' => 0, 'image' => 'iphone11.jpg'],
            ['nome' => 'APPLE iPhone 11 Pro', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 5.8, 'risDisplay' => '1125x2436', 
                'processore' => 'Apple A13 Bionic', 'ram' => 4, 'memoria' => 256, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'tripla fotocamera 12 megapixel, apertura f/2.4 (ultrawide), f/2.0 (tele) e f/1.8 (standard) + Frontale 12 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 5.8
                Risoluzione display: 1125 x 2436
                Processore: Apple A13 Bionic
                Ram: 4
                Memoria: 256
                Scheda grafica: Proprietaria Apple
                Fotocamera: tripla fotocamera 12 megapixel, apertura f/2.4 (ultrawide), f/2.0 (tele) e f/1.8 (standard) + Frontale 12 MP, apertura f/2.2
                OS: iOS 13', 
                'descLong' => 'Tripla fotocamera: una rivoluzione unica:
                Tre fotocamere progettate per lavorare come una cosa sola, e calibrate per offrire una resa dei colori omogenea, così puoi passare facilmente da una all’altra. L’interfaccia ridisegnata ti permette di vedere quello che succede al di fuori dell’inquadratura.
                Nuova modalità Notte:
                Fare foto bellissime anche con poca luce e senza usare il flash è possibile: la modalità Notte si attiva in automatico riducendo il rumore dell’immagine per darti colori ancora più naturali.
                Campo visivo più ampio:
                Con iPhone 11 Pro puoi passare dal teleobiettivo all’ultra-grandangolo: è un vero e proprio zoom ottico 4x.
                Video 4K su ogni fotocamera:
                Registra video 4K a 60 fps incredibilmente dettagliati e fluidi, sia con la videocamera frontale che con quella posteriore, e ritoccali come fai per le foto.
                Un display che brilla per intelligenza:
                Il suo display Super Retina XDR è il più luminoso e nitido di sempre: fino a 800 nit in pieno sole e fino a 1200 nit quando guardi foto o video HDR.
                È l’iPhone più resistente all’acqua che abbiamo mai creato:
                Il profilo in acciaio inossidabile aderisce con estrema precisione al vetro di iPhone 11 Pro rendendolo ancora più resistente all’acqua: fino a 4 metri per 30 minuti.
                Non ti abbiamo mai dato così tanta autonomia in più:
                Con iPhone 11 Pro puoi fare ancora di più perché ha una batteria che dura tutto il giorno. iPhone 11 Pro ti dà fino a 4 ore di autonomia in più, che diventano 5 se scegli iPhone 11 Pro Max.
                Face ID più semplice e più sicuro:
                Con iOS 13, Face ID è ancora più veloce e funziona da più angolazioni. Ed è sempre la forma di autenticazione facciale più sicura su uno smartphone.
                Il vetro più robusto su uno smartphone:
                iPhone 11 Pro è protetto davanti e dietro dal vetro più resistente mai visto su uno smartphone e la parte posteriore è ricavata da un unico pezzo di vetro scolpito.
                Chip A13 progettato su misura:
                Abbiamo creato il chip A13 Bionic per migliorare l’apprendimento automatico sull’intero chip e permetterti di fare cose che con gli altri smartphone non sono possibili.',
                'prezzo' => 1359, 'scontoPerc' => 12, 'sconto' => 0, 'image' => 'iphone11pro.jpg'],
            ['nome' => 'APPLE iPhone 11 Pro Max', 'catId' => 4, 'marca' => 'APPLE', 'dimDisplay' => 6.5, 'risDisplay' => '1242x2688', 
                'processore' => 'Apple A13 Bionic', 'ram' => 4, 'memoria' => 256, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => 'tripla fotocamera 12 megapixel, apertura f/2.4 (ultrawide), f/2.0 (tele) e f/1.8 (standard) + Frontale 12 MP, apertura f/2.2', 
                'descShort' => 'Dimensioni display: 6.5
                Risoluzione display: 1242 x 2688
                Processore: Apple A13 Bionic
                Ram: 4
                Memoria: 256
                Scheda grafica: Proprietaria Apple
                Fotocamera: tripla fotocamera 12 megapixel, apertura f/2.4 (ultrawide), f/2.0 (tele) e f/1.8 (standard) + Frontale 12 MP, apertura f/2.2
                OS: iOS 13', 
                'descLong' => 'Tripla fotocamera: una rivoluzione unica:
                Tre fotocamere progettate per lavorare come una cosa sola, e calibrate per offrire una resa dei colori omogenea, così puoi passare facilmente da una all’altra. L’interfaccia ridisegnata ti permette di vedere quello che succede al di fuori dell’inquadratura.
                Nuova modalità Notte:
                Fare foto bellissime anche con poca luce e senza usare il flash è possibile: la modalità Notte si attiva in automatico riducendo il rumore dell’immagine per darti colori ancora più naturali.
                Campo visivo più ampio:
                Con iPhone 11 Pro puoi passare dal teleobiettivo all’ultra-grandangolo: è un vero e proprio zoom ottico 4x.
                Video 4K su ogni fotocamera:
                Registra video 4K a 60 fps incredibilmente dettagliati e fluidi, sia con la videocamera frontale che con quella posteriore, e ritoccali come fai per le foto.
                Un display che brilla per intelligenza:
                Il suo display Super Retina XDR è il più luminoso e nitido di sempre: fino a 800 nit in pieno sole e fino a 1200 nit quando guardi foto o video HDR.
                È l’iPhone più resistente all’acqua che abbiamo mai creato:
                Il profilo in acciaio inossidabile aderisce con estrema precisione al vetro di iPhone 11 Pro rendendolo ancora più resistente all’acqua: fino a 4 metri per 30 minuti.
                Non ti abbiamo mai dato così tanta autonomia in più:
                Con iPhone 11 Pro puoi fare ancora di più perché ha una batteria che dura tutto il giorno. iPhone 11 Pro ti dà fino a 4 ore di autonomia in più, che diventano 5 se scegli iPhone 11 Pro Max.
                Face ID più semplice e più sicuro:
                Con iOS 13, Face ID è ancora più veloce e funziona da più angolazioni. Ed è sempre la forma di autenticazione facciale più sicura su uno smartphone.
                Il vetro più robusto su uno smartphone:
                iPhone 11 Pro è protetto davanti e dietro dal vetro più resistente mai visto su uno smartphone e la parte posteriore è ricavata da un unico pezzo di vetro scolpito.
                Chip A13 progettato su misura:
                Abbiamo creato il chip A13 Bionic per migliorare l’apprendimento automatico sull’intero chip e permetterti di fare cose che con gli altri smartphone non sono possibili.',
                'prezzo' => 1459, 'scontoPerc' => 14, 'sconto' => 0, 'image' => 'iphone11promax.jpg'],
            ['nome' => 'SAMSUNG Galaxy s10', 'catId' => 5, 'marca' => 'SAMSUNG', 'dimDisplay' => 6.1, 'risDisplay' => '1440X3040', 
                'processore' => 'Samsung Exynos 9 Octa 9820', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G76 MP12',
                'fotocamera' => '12 MP Ƒ/1.5-2.4 + Zoom 2X 12 MP ƒ/2.4 + Grandangolare 16 MP ƒ/2.2 + 10 MP Ƒ/1.9', 
                'descShort' => 'Dimensioni display: 6.1
                Risoluzione display: 1440 X 3040
                Processore: Samsung Exynos 9 Octa 9820
                Ram: 8
                Memoria: 128
                Scheda grafica: ARM Mali-G76 MP12
                Fotocamera: 12 MP Ƒ/1.5-2.4 + Zoom 2X 12 MP ƒ/2.4 + Grandangolare 16 MP ƒ/2.2 + 10 MP Ƒ/1.9
                OS: Android 9', 
                'descLong' => 'DESIGN
                Riprogettato interamente per rimuovere ogni elemento di distrazione per la visione. Nessun notch, nessun disturbo. Tagli al laser perfetti, sistemi di sicurezza a schermo e display Dynamic AMOLED, fanno dell Infinity-O Display lo schermo Galaxy più innovativo di sempre.
                Un tocco sullo schermo e lo smartphone è sbloccato.
                Il nuovo lettore di impronte ad ultrasuoni integrato direttamente nello schermo ti permette di sbloccare con un semplice tocco.
                FOTOCAMERA
                La fotocamera di nuova generazione a prova di non-professionista
                Cattura il mondo intero. Usa la fotocamera ultra-grandangolare per scattare incredibili foto con un campo visivo a 123 gradi.
                Una fotocamera intelligente per scatti eccezionali.
                Scatta foto sempre perfette con la fotocamera intelligente che suggerisce la composizione ideale dell immagine e ottimizza automaticamente le impostazioni a seconda della scena.
                PERFORMANCE
                Condividi la tua energia. Con la Condivisione di Carica Wireless condividi la tua carica con altri dispositivi mobili.3 Inoltre, la Ricarica Rapida wireless 2.0 riporta il tuo telefono al 100 % più rapidamente.
                Rimani sempre connesso e condividi, ovunque tu vada.
                Il Wi-Fi intelligente raggiunge velocità più elevate con il nuovo standard Wi-Fi 6: la connessione è sicura e affidabile anche sulle reti pubbliche.
                E in un attimo passa all LTE per raggiungere un incredibile velocità di trasmissione dati fino a 2,0Gbps.
                Abbiamo cambiato le regole del gioco.
                Abbiamo progettato hardware e software in modo da offrirti prestazioni di gioco migliorate, dove i rallentamenti sono un ricordo passato.
                Lo smartphone che si adatta a te.
                INTELLIGENZA ARTIFICIALE
                Sempre al lavoro per tenerti un passo avanti. Intelligenza artificiale e hardware avanzato analizzano il modo con cui utilizzi lo smartphone, adattandosi alle tue esigenze. L efficienza migliora, garantendo prestazioni al top per tutta la giornata.
                Con l Intelligenza Artificiale al tuo servizio, la giornata scorre senza problemi.
                Bixby Routine ti suggerisce le app che usi più di frequente e le attività di routine in base all orario o al luogo, per un esperienza facilitata e personalizzata - su misura per te.',
                'prezzo' => 659, 'scontoPerc' => 9, 'sconto' => 0, 'image' => 'galaxys10.png'],
            ['nome' => 'SAMSUNG Galaxy s10+', 'catId' => 5, 'marca' => 'SAMSUNG', 'dimDisplay' => 6.4, 'risDisplay' => '1440X3040', 
                'processore' => 'Samsung Exynos 9 Octa 9820', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G76 MP12',
                'fotocamera' => '12 MP Ƒ/1.5-2.4 + Zoom 2X 12 MP ƒ/2.4 + Grandangolare 16 MP ƒ/2.2 +  Frontale 10 MP Ƒ/1.9 +8MP Ƒ/2.2 ', 
                'descShort' => 'Dimensioni display: 6.4
                Risoluzione display: 1440x3040
                Processore: Samsung Exynos 9 Octa 9820
                Ram: 8
                Memoria: 128
                Scheda grafica: ARM Mali-G76 MP12
                Fotocamera: 12 MP Ƒ/1.5-2.4 + Zoom 2X 12 MP ƒ/2.4 + Grandangolare 16 MP ƒ/2.2 +  Frontale 10 MP Ƒ/1.9 +8MP Ƒ/2.2 
                OS: Android 9', 
                'descLong' => 'DESIGN
                Riprogettato interamente per rimuovere ogni elemento di distrazione per la visione. Nessun notch, nessun disturbo. Tagli al laser perfetti, sistemi di sicurezza a schermo e display Dynamic AMOLED, fanno dell Infinity-O Display lo schermo Galaxy più innovativo di sempre.
                Un tocco sullo schermo e lo smartphone è sbloccato.
                Il nuovo lettore di impronte ad ultrasuoni integrato direttamente nello schermo ti permette di sbloccare con un semplice tocco.
                FOTOCAMERA
                La fotocamera di nuova generazione a prova di non-professionista
                Cattura il mondo intero. Usa la fotocamera ultra-grandangolare per scattare incredibili foto con un campo visivo a 123 gradi.
                Una fotocamera intelligente per scatti eccezionali.
                Scatta foto sempre perfette con la fotocamera intelligente che suggerisce la composizione ideale dell immagine e ottimizza automaticamente le impostazioni a seconda della scena.
                PERFORMANCE
                Condividi la tua energia. Con la Condivisione di Carica Wireless condividi la tua carica con altri dispositivi mobili.3 Inoltre, la Ricarica Rapida wireless 2.0 riporta il tuo telefono al 100 % più rapidamente.
                Rimani sempre connesso e condividi, ovunque tu vada.
                Il Wi-Fi intelligente raggiunge velocità più elevate con il nuovo standard Wi-Fi 6: la connessione è sicura e affidabile anche sulle reti pubbliche.
                E in un attimo passa all LTE per raggiungere un incredibile velocità di trasmissione dati fino a 2,0Gbps.
                Abbiamo cambiato le regole del gioco.
                Abbiamo progettato hardware e software in modo da offrirti prestazioni di gioco migliorate, dove i rallentamenti sono un ricordo passato.
                Lo smartphone che si adatta a te.
                INTELLIGENZA ARTIFICIALE
                Sempre al lavoro per tenerti un passo avanti. Intelligenza artificiale e hardware avanzato analizzano il modo con cui utilizzi lo smartphone, adattandosi alle tue esigenze. L efficienza migliora, garantendo prestazioni al top per tutta la giornata.
                Con l Intelligenza Artificiale al tuo servizio, la giornata scorre senza problemi.
                Bixby Routine ti suggerisce le app che usi più di frequente e le attività di routine in base all orario o al luogo, per un esperienza facilitata e personalizzata - su misura per te.',
                'prezzo' => 999, 'scontoPerc' => 20, 'sconto' => 0, 'image' => 'galaxys10plus.jpg'],
            ['nome' => 'SAMSUNG Galaxy s20', 'catId' => 5, 'marca' => 'SAMSUNG', 'dimDisplay' => 6.2, 'risDisplay' => '1440X3040', 
                'processore' => 'Samsung Exynos 990', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G77 MP11',
                'fotocamera' => '12 MP Ƒ/1.8 + Zoom 3X 64 MP ƒ/2.0 + Grandangolare 12 MP ƒ/2.2 +  Frontale 10 MP Ƒ/2.2 ', 
                'descShort' => 'Dimensioni display: 6.2
                Risoluzione display: 1440x3040
                Processore: Samsung Exynos 990
                Ram: 8
                Memoria: 128
                Scheda grafica: ARM Mali-G77 MP11
                Fotocamera: 12 MP Ƒ/1.8 + Zoom 3X 64 MP ƒ/2.0 + Grandangolare 12 MP ƒ/2.2 +  Frontale 10 MP Ƒ/2.2 OS: Android 10', 
                'descLong' => '5G Ultraveloce
                Sii il primo a vivere un esperienza mobile totalmente nuova con Galaxy 5G. Scarica in pochi secondi un intera stagione della tua serie TV preferita. 
                Space Zoom
                Con lo zoom più avanzato di sempre, Samsung Galaxy ti aiuterà a catturare dettagli incredibili anche a grande distanza. Lo zoom ottico ibrido di Galaxy S20 ti consente di ingrandire fino a 3 volte tutto ciò che cattura la tua attenzione senza alcuna perdita di qualità dell immagine. Inoltre, con Galaxy S20 hai lo zoom Super Resolution che ti consente di continuare ad ingrandire fino a 30 volte. Quando sarai tra la folla ad un concerto, fare zoom sul palco sarà una questione di attimi.
                Registrazione video in 8K
                Galaxy S20 porta i tuoi video a un livello completamente nuovo grazie alla risoluzione 8K, la più alta su qualsiasi smartphone Galaxy. I tuoi video saranno ricchissimi di dettagli grazie alla risoluzione 4 volte superiore a quella UHD. I video 8K sono talmente incredibili che puoi persino ricavarne foto ultradettagliate da 33 MP senza sforzo. 
                Scatto Singolo
                Tocca una volta l otturatore e la funzione "Scatto singolo" registrerà un video, lo analizzerà con l intelligenza artificiale di Galaxy S20 e ti offrirà fino a 14 foto e video con effetti diversi tra cui ultra wide, bokeh, foto ritagliate, video time-lapse e altro ancora. 
                Scatto notturno
                L innovativa fotocamera per scenari scarsamente illuminati trasformerà radicalmente le tue foto e i tuoi video notturni. I nostri nuovi sensori di immagine assorbono più luce per produrre foto ancora più ricche di dettagli, anche al buio. La modalità notturna unisce fino a 30 immagini istantaneamente per creare una singola immagine indimenticabile. Con Galaxy S20 puoi registrare anche Video HDR per ottenere riprese notturne ancora più ricche e luminose.
                Dynamic AMOLED 2X
                Goditi un esperienza di visione cinematografica con colori e contrasti incredibilmente reali sul nostro Display AMOLED certificato HDR 10+. Grazie a una maggiore luminosità potrai vedere tutti i tuoi contenuti al meglio, anche in pieno giorno. Oltre alla bellezza dei colori, lo schermo di Galaxy S20 è anche intelligente e riduce automaticamente la luce blu per evitare l affaticamento degli occhi. Infine, la nuova frequenza di aggiornamento dell immagine da 120Hz, offre transizioni sempre fluide, senza alcuna interruzione.
                Prestazioni incredibili con le nuove CPU/GPU/NPU
                Abbiamo migliorato CPU, GPU e NPU per rendere ancora più intelligente il nostro smartphone, con incredibili capacità di calcolo, potenza grafica e apprendimento AI. Batteria a lunga durata con ricarica Super Fast
                Non fermarti mai grazie alla straordinaria batteria da 4.000 mAh e ad una capacità di ricarica super veloce da 25 W.',
                'prezzo' => 899, 'scontoPerc' => 11, 'sconto' => 0, 'image' => 'galaxys20.jpg'],
            ['nome' => 'SAMSUNG Galaxy s20+', 'catId' => 5, 'marca' => 'SAMSUNG', 'dimDisplay' => 6.7, 'risDisplay' => '1440X3040', 
                'processore' => 'Samsung Exynos 990', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G77 MP11',
                'fotocamera' => '12 MP Ƒ/1.8 + Zoom 3X 64 MP ƒ/2.0 + Grandangolare 12 MP ƒ/2.2 +  Frontale 10 MP Ƒ/2.2 ', 
                'descShort' => 'Dimensioni display: 6.7
                Risoluzione display: 1440x3040
                Processore: Samsung Exynos 990
                Ram: 8
                Memoria: 128
                Scheda grafica: ARM Mali-G77 MP11
                Fotocamera: 12 MP Ƒ/1.8 + Zoom 3X 64 MP ƒ/2.0 + Grandangolare 12 MP ƒ/2.2 +  Frontale 10 MP Ƒ/2.2 OS: Android 10', 
                'descLong' => '5G Ultraveloce
                Sii il primo a vivere un esperienza mobile totalmente nuova con Galaxy 5G. Scarica in pochi secondi un intera stagione della tua serie TV preferita. 
                Space Zoom
                Con lo zoom più avanzato di sempre, Samsung Galaxy ti aiuterà a catturare dettagli incredibili anche a grande distanza. Lo zoom ottico ibrido di Galaxy S20 ti consente di ingrandire fino a 3 volte tutto ciò che cattura la tua attenzione senza alcuna perdita di qualità dell immagine. Inoltre, con Galaxy S20 hai lo zoom Super Resolution che ti consente di continuare ad ingrandire fino a 30 volte. Quando sarai tra la folla ad un concerto, fare zoom sul palco sarà una questione di attimi.
                Registrazione video in 8K
                Galaxy S20 porta i tuoi video a un livello completamente nuovo grazie alla risoluzione 8K, la più alta su qualsiasi smartphone Galaxy. I tuoi video saranno ricchissimi di dettagli grazie alla risoluzione 4 volte superiore a quella UHD. I video 8K sono talmente incredibili che puoi persino ricavarne foto ultradettagliate da 33 MP senza sforzo. 
                Scatto Singolo
                Tocca una volta l otturatore e la funzione "Scatto singolo" registrerà un video, lo analizzerà con l intelligenza artificiale di Galaxy S20 e ti offrirà fino a 14 foto e video con effetti diversi tra cui ultra wide, bokeh, foto ritagliate, video time-lapse e altro ancora. 
                Scatto notturno
                L innovativa fotocamera per scenari scarsamente illuminati trasformerà radicalmente le tue foto e i tuoi video notturni. I nostri nuovi sensori di immagine assorbono più luce per produrre foto ancora più ricche di dettagli, anche al buio. La modalità notturna unisce fino a 30 immagini istantaneamente per creare una singola immagine indimenticabile. Con Galaxy S20 puoi registrare anche Video HDR per ottenere riprese notturne ancora più ricche e luminose.
                Dynamic AMOLED 2X
                Goditi un esperienza di visione cinematografica con colori e contrasti incredibilmente reali sul nostro Display AMOLED certificato HDR 10+. Grazie a una maggiore luminosità potrai vedere tutti i tuoi contenuti al meglio, anche in pieno giorno. Oltre alla bellezza dei colori, lo schermo di Galaxy S20 è anche intelligente e riduce automaticamente la luce blu per evitare l affaticamento degli occhi. Infine, la nuova frequenza di aggiornamento dell immagine da 120Hz, offre transizioni sempre fluide, senza alcuna interruzione.
                Prestazioni incredibili con le nuove CPU/GPU/NPU
                Abbiamo migliorato CPU, GPU e NPU per rendere ancora più intelligente il nostro smartphone, con incredibili capacità di calcolo, potenza grafica e apprendimento AI. Batteria a lunga durata con ricarica Super Fast
                Non fermarti mai grazie alla straordinaria batteria da 4.000 mAh e ad una capacità di ricarica super veloce da 25 W.',
                'prezzo' => 999, 'scontoPerc' => 10, 'sconto' => 0, 'image' => 'galaxys20plus.jpg'],
            ['nome' => 'SAMSUNG Galaxy A51', 'catId' => 5, 'marca' => 'SAMSUNG', 'dimDisplay' => 6.5, 'risDisplay' => '1080x2400', 
                'processore' => 'Samsung Exynos 9611', 'ram' => 4, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G72 MP3',
                'fotocamera' => '48 MP Ƒ/2.0 + Tof 5MP ƒ/2.2+ Grandangolare 12 MP ƒ/2.2 + Frontale 32 MP Ƒ/2.2 ', 
                'descShort' => 'Dimensioni display: 6.5
                Risoluzione display: 1080x2400
                Processore: Samsung Exynos 9611
                Ram: 4
                Memoria: 128
                Scheda grafica: ARM Mali-G72 MP3
                Fotocamera: 48 MP Ƒ/2.0 + Tof 5MP ƒ/2.2+ Grandangolare 12 MP ƒ/2.2 + Frontale 32 MP Ƒ/2.2 
                OS: Android 9', 
                'descLong' => 'Infinity-O Display per un esperienza senza limiti:
                L’Infinity-O Display di Galaxy A51 regala una nuova dimensione ai tuoi contenuti. Ora puoi giocare, guardare video, navigare e dedicarti a più attività contemporaneamente senza interruzioni, grazie allo schermo da 6.5" FHD+ con tecnologia Super AMOLED. La cornice quasi invisibile e l assenza di elementi di distrazione sul display regalano un’esperienza senza precedenti.
                Quattro fotocamere, infinite possibilità di scatto:
                La fotocamera principale da 48 MP garantisce un elevata risoluzione per fotografie sempre nitide e dettagliate, di giorno come di notte. La fotocamera ultra-grandangolare da 12 MP con angolo di visione a 123° consente di immortalare panorami ancora più ampi. Con la nuova fotocamera Macro da 5 MP puoi scattare primi piani perfetti, mettendo in risalto il tuo soggetto grazie agli effetti Fuoco Live della fotocamera di profondità da 5 MP.
                Amplia la tua prospettiva:
                La fotocamera ultra-grandangolare cattura tutto il tuo mondo grazie al campo di visione ancora più ampio. Inoltre, con la fotocamera principale da 48 MP, luminosità e livello di dettaglio ti accompagnano nei tuoi scatti per tutto il giorno.
                Cattura ogni micro dettaglio con la fotocamera Macro:
                La fotocamera Macro da 5 MP ti permette di realizzare primi piani di qualità con un livello di dettaglio eccezionale, sempre con la massima nitidezza. Puoi applicare e regolare la sfocatura dello sfondo (effetto Bokeh) per valorizzare il tuo soggetto con il massimo impatto visivo.
                Video stabili e fluidi in ogni situazione:
                Grazie alla fotocamera ultra-grandangolare e al software predittivo, la qualità dei video realizzati con Galaxy A51 è pari a quella di una action camera professionale. La funzione Super Stabilizzatore assicura video fluidi, anche quando insegui l’avventura.
                Porta il soggetto al centro della scena:
                La fotocamera di profondità da 5 MP ti permette di regolare la profondità di campo prima e dopo lo scatto e sfocare lo sfondo per realizzare immagini come un vero professionista.
                Mostra il meglio di te:
                Sempre alla ricerca del selfie perfetto? Se vuoi un ritratto eccezionale alla luce del giorno, con la fotocamera anteriore da 32 MP di Galaxy A51 puoi ottenere immagini nitide ad alta risoluzione.
                La batteria che non ti abbandona mai:
                Giornate ricche di avvenimenti ed emozioni richiedono uno smartphone che resista a lungo. Grazie alla batteria da 4.000 mAh puoi rimanere sempre connesso, senza rinunce. E non finisce qui: con la Ricarica Rapida da 15 W sei subito pronto a ripartire.
                Tutta la sicurezza dell’impronta digitale:
                Galaxy A51 è dotato di autenticazione biometrica ad alta tecnologia. Il lettore di impronte digitali nel display è estremamente rapido e comodo, per un esperienza di sblocco immediata.',
                'prezzo' => 349, 'scontoPerc' => 14, 'sconto' => 0, 'image' => 'galaxya51.jpg'],
            ['nome' => 'SAMSUNG Galaxy A71', 'catId' => 5, 'marca' => 'SAMSUNG', 'dimDisplay' => 6.7, 'risDisplay' => '1080x2400', 
                'processore' => 'Qualcomm Snapdragon 730G', 'ram' => 6, 'memoria' => 128, 'schedaGraf' => 'Adreno 618',
                'fotocamera' => '64 MP Ƒ/1.8 + Tof 5MP ƒ/2.2+ Grandangolare 12 MP ƒ/2.2 + Frontale 32 MP Ƒ/2.2 ', 
                'descShort' => 'Dimensioni display: 6.7
                Risoluzione display: 1080x2400
                Processore: Qualcomm Snapdragon 730G
                Ram: 6
                Memoria: 128
                Scheda grafica: Adreno 618
                Fotocamera: 64 MP Ƒ/1.8 + Tof 5MP ƒ/2.2+ Grandangolare 12 MP ƒ/2.2 + Frontale 32 MP Ƒ/2.2 
                OS: Android 9', 
                'descLong' => 'Galaxy A71 ha un design pulito e rinnovato e ti assicura colori accesi e contrasti elevati. Con il display Infinity-O 6.7 ″ FHD+, proporzioni 20:9 e tecnologia Super AMOLED godi di un esperienza visiva senza interruzioni.
                Cattura ogni istante con le quattro fotocamere posteriori di Galaxy A71:
                - Fotocamera profondità 5 MP: aggiungi l effetto Messa a Fuoco Live ai tuoi scatti per ritratti professionali.
                - Fotocamera principale: scatta foto nitide e luminose di notte con la fotocamera ad alta risoluzione da 64 MP.
                - Fotocamera grandangolare 12 MP: scatta foto con angolo di visone da 123˚, simile a quello dell occhio umano.
                - Fotocamera Macro 5 MP: cattura il tuo soggetto in modo più dettagliato, anche a distanza ravvicinata.
                - Fotocamera Selfie: scatta selfie chiari e luminosi con il Selfie Flash e la fotocamera da 32 MP ad alta risoluzione.
                Realizza video nitidi e stabili come una action camera professionale con la funzione Super Stabilizzatore.
                Galaxy A71 vanta un audio surround mozzafiato grazie alla tecnologia Dolby Atmos in grado di creare un suono avvolgente che si muove intorno a te.
                Avrai energia per tutta la giornata con la batteria da 4.500 mAh e con la ricarica rapida da 25 W potrai riportare lo smartphone al 100% molto rapidamente.
                Dai più spazio ai tuoi ricordi con la memoria interna da 128 GB, espandibile fino a 512 GB con microSD. Il Processore Octa Core e la RAM di 6 GB garantiscono prestazioni fluide ed efficienti. Galaxy A71 è aggiornato ad Android 10 e riceve costantemente patch di sicurezza.
                Proteggi i tuoi contenuti in ogni momento con la piattaforma di sicurezza a più livelli Samsung Knox che rileva manomissioni e protegge i tuoi dati. Sblocca immediatamente il tuo smartphone con il lettore di impronte digitali integrato nel display.
                Fai ancora di più: Bixby Voice, Bixby Vision e Bixby Routines sono pronti a supportarti ad ogni passo.',
                'prezzo' => 449, 'scontoPerc' => 11, 'sconto' => 0, 'image' => 'iphone8.jpg'],
            ['nome' => 'HUAWEI P30 Pro', 'catId' => 5, 'marca' => 'HUAWEI', 'dimDisplay' => 6.47, 'risDisplay' => '1080x2340', 
                'processore' => 'Huawei HiSilicon Kirin 980', 'ram' => 6, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G76 MP10',
                'fotocamera' => '40 MP Ƒ/1.6 + Zoom 5X 8MP ƒ/3.4+ Grandangolare 20 MP ƒ/2.2 + Frontale 32 MP Ƒ/2.0', 
                'descShort' => 'Dimensioni display: 6.47
                Risoluzione display: 1080x2340
                Processore: Huawei HiSilicon Kirin 980
                Ram: 6
                Memoria: 128
                Scheda grafica: ARM Mali-G76 MP10
                Fotocamera: 40 MP Ƒ/1.6 + Zoom 5X 8MP ƒ/3.4+ Grandangolare 20 MP ƒ/2.2 + Frontale 32 MP Ƒ/2.0
                OS: Android 9', 
                'descLong' => 'Una danza di colori
                Prendendo spunto dallo splendore del cielo, HUAWEI P30 Pro riflette i suoi incantevoli colori di luce e spazio. Vivi la bellezza di un’alba rosata, del cielo a mezzogiorno, di un’aurora misteriosa o dell’oscurità della notte.
                Esploratore fotografico
                Il coraggio di impressionare. La quadrupla fotocamera in stile Leica asseconda il tuo talento fotografico aiutandoti a catturare il mondo nella sua interezza. Un sistema fotografico all’avanguardia, composto da una lente SuperZoom, una fotocamera Super Sensing da 40 MP, una fotocamera con lente ultragrandangolare da 20 MP e una fotocamera HUAWEI TOF, che ti permette di ricordare momenti incredibili.
                Sfide in controluce
                Analizzando migliaia di fotografie in controluce o in scarse condizioni di luminosità, l’HDR + con AI dona chiarezza ai tuoi scatti. L’Intelligenza Artificiale esamina innumerevoli fotogrammi e segmenta le differenti aree di una foto per combinarne le migliori qualità. Mentre luce e colore vengono bilanciati su livelli differenti per mettere a fuoco il tuo volto.',
                'prezzo' => 649, 'scontoPerc' => 8, 'sconto' => 0, 'image' => 'p30pro.jpg'],
            ['nome' => 'HUAWEI P40 Pro', 'catId' => 5, 'marca' => 'HUAWEI', 'dimDisplay' => 6.58, 'risDisplay' => '1200x2640', 
                'processore' => 'Huawei HiSilicon Kirin 990', 'ram' => 8, 'memoria' => 256, 'schedaGraf' => 'ARM Mali-G76 MC16',
                'fotocamera' => '50 MP Ƒ/1.9 + Zoom 5X 12MP ƒ/3.4+ Grandangolare 40 MP ƒ/1.8 + Frontale 32 MP Ƒ/2.0', 
                'descShort' => 'Dimensioni display: 6.58
                Risoluzione display: 1200x2640
                Processore: Huawei HiSilicon Kirin 990
                Ram: 8
                Memoria: 256
                Scheda grafica: ARM Mali-G76 MC16
                Fotocamera: 50 MP Ƒ/1.9 + Zoom 5X 12MP ƒ/3.4+ Grandangolare 40 MP ƒ/1.8 + Frontale 32 MP Ƒ/2.0
                OS: Android 10', 
                'descLong' => 'Scopri la fotografia visionaria del nuovo HUAWEI P40 Pro. Le quattro fotocamera Leica grazie al sensore principale da 50MP e all’innovativa tecnologia Ultra Vision, ti permettono di catturare sempre più dettagli anche in condizioni di forte contrasto luminoso, per una resa fotografica sublime.
                La Cine Camera Ultra Grandangolare 40MP non solo è in grado di catturare ampie scene e ampi panorami, ma anche di registrare video professionali grazie alla stabilizzazione video e al supporto dell’Intelligenza Artificiale.
                Scopri le funzioni in Time Lapse 4K e Slow Motion fino a 7680 fps. L’obiettivo telescopico da 12MP con zoom ottico 5x arriva a catturare dettagli in alta definizione per una resa fotografica sempre ottimale.
                Il sensore TOF 3D analizza i dati di profondità, dando ai tuoi scatti in modalità ritratto un tocco sempre più professionale e creativo.
                La fotocamera anteriore da 32MP ad alta definizione è supportata da un sensore aggiuntivo per la profondità e dalla tecnologia HDR+.
                La nuova funzionalità AI Golden Snap migliora le tue foto con un tocco grazie all’Intelligenza Artificiale che può rimuovere i passanti dalle foto, rimuovere i riflessi dalle superfici oppure cogliere i momenti migliori di un’azione sportiva o di un’espressione facciale. L’AI è in grado di riconoscere 31 punti diversi del corpo umano e 97 punti diversi del volto per migliorare gli scatti.
                Preprarati alla connessione 5G supportata dal nuovo processore HUAWEI Kirin 990 con processo produttivo a 7nm. Il nuovo HUAWEI P40 Pro è già pronto per la connessione del futuro.
                Google Mobile Services non disponibili. Huawei P40 Pro utilizza i Huawei Mobile Services (HMS) anziché i Google Mobile Services (GMS). Il Google Play Store e le app di Google non sono preinstallate.
                Scopri come scaricare le app trasferendole comodamente dal tuo vecchio smartphone al nuovo HUAWEI P40 Pro tramite l’app Phone Clone.
                Crea il tuo HUAWEI ID per accedere al mondo dei servizi HUAWEI e per scaricare le migliori app dallo store ufficiale APPGallery. Scarica il motore di ricerca TrovApp per installare le tue applicazioni preferite.',
                'prezzo' => 1049, 'scontoPerc' => 2, 'sconto' => 0, 'image' => 'p40pro.jpg'],
            ['nome' => 'HUAWEI P40 Lite', 'catId' => 5, 'marca' => 'HUAWEI', 'dimDisplay' => 6.4, 'risDisplay' => '1080x2310', 
                'processore' => 'Huawei HiSilicon Kirin 810', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'ARM Mali-G52',
                'fotocamera' => '48 MP Ƒ/1.8 + Tof 2MP Ƒ/2.4 + Grandangolare 8 MP ƒ/2.4 + Frontale 16 MP Ƒ/2.0', 
                'descShort' => 'Dimensioni display: 6.4
                Risoluzione display: 1080x2310
                Processore: Huawei HiSilicon Kirin 810
                Ram: 8
                Memoria: 128
                Scheda grafica: ARM Mali-G52
                Fotocamera: 48 MP Ƒ/1.8 + Tof 2MP Ƒ/2.4 + Grandangolare 8 MP ƒ/2.4 + Frontale 16 MP Ƒ/2.0
                OS: Android 10', 
                'descLong' => 'Quattro fotocamere:
                Con quattro fotocamere posteriori HUAWEI P40 lite consente scanti più ampi, nitidi e ravvicinati di quanto tu possa immaginare. Realizza ritratti cinematografici con la lente Bokeh, oppure passa all’obiettivo macro e scatta foto naturalistiche perfette nei minimi dettagli. Realizza meravigliosi scatti anche in condizioni di scarsa luminosità grazie al sensore principale da 48MP.
                Tutto con lo stesso dispositivo. Sarà come avere in tasca uno studio professionale.
                Design moderno e funzionale:
                Il design di HUAWEI P40 lite enfatizza l’essenziale, senza inutili fronzoli. La scocca dello smartphone è realizzata in vetro curvato su quattro lati.
                La fotocamere frontale si trova all’interno del display HUAWEI Punch FullView da 6.4”, garantendo un’ottimizzazione dello spazio sullo schermo.
                E con il sensore d’impronta digitale laterale, puoi sbloccarlo semplicemente impugnandolo nella tua mano.
                Intelligenza profonda, prestazioni eccezionali:
                HUAWEI P40 lite integra il chipset Kirin 810 a 7nm, con dietro tutto il suo formidabile arsenale tecnologico. L’NPU si basa sull’architettura Da Vinci e ottimizza l’efficienza e l’elaborazione tramite Intelligenza Artificiale.
                Batteria a lunga durata e ricarica super rapida:
                Con una capiente batteria da 4200mAh, potrai affrontare la giornata con una singola ricarica. Ma anche se ti dimentichi di metterlo in carica durante la notte, niente paura. Collegalo mentre prendi il caffè al mattino e sarà pronto a partire in un batetr d’occhio grazie al SuperCharge HUAWEI 40W certificato TUV Rheinland, che ricarica fino al 70% della batteria in 30 minuti.
                P40 lite con Huawei Mobile Services:
                Google Mobile Services non disponibili. Huawei P40 lite utilizza i Huawei Mobile Services (HMS) anziché i Google Mobile Services (GMS). Il Google Play Store e le app di Google non sono preinstallate.
                Scopri come scaricare le app trasferendole comodamente dal tuo vecchio smartphone al nuovo HUAWEI P40 lite tramite l’app Phone Clone.
                Crea il tuo HUAWEI ID per accedere al mondo dei servizi HUAWEI e per scaricare le migliori app dallo store ufficiale APPGallery. Scarica il motore di ricerca TrovApp per installare le tue applicazioni preferite.',
                'prezzo' => 329, 'scontoPerc' => 9, 'sconto' => 0, 'image' => 'p40lite.jpg'],
            ['nome' => 'XIAOMI Mi 9T', 'catId' => 5, 'marca' => 'XIAOMI', 'dimDisplay' => 6.39, 'risDisplay' => '1080x2340', 
                'processore' => 'Qualcomm Snapdragon 730', 'ram' => 6, 'memoria' => 128, 'schedaGraf' => 'Adreno 618',
                'fotocamera' => '48 MP Ƒ/1.8 + ZOOM 2X 8MP Ƒ/2.4 + Grandangolare 13 MP ƒ/2.4 + Frontale 20 MP Ƒ/2.2', 
                'descShort' => 'Dimensioni display: 6.39
                Risoluzione display: 1080x2340
                Processore: Qualcomm Snapdragon 730
                Ram: 6
                Memoria: 128
                Scheda grafica: Adreno 618
                Fotocamera: 48 MP Ƒ/1.8 + ZOOM 2X 8MP Ƒ/2.4 + Grandangolare 13 MP ƒ/2.4 + Frontale 20 MP Ƒ/2.2
                OS: Android 9', 
                'descLong' => 'Accelerazione Dual Turbo:
                Per potenziare la tua esperienza di gioco, Mi 9T offre non solo un ottimo hardware, ma anche un ottimizzazione del software che aumenta le prestazioni. Mi Turbo riduce la frammentazione dei file e mantiene il funzionamento del sistema fluido fino a 18 mesi. La modalità Turbo Videogiochi aggiornata dà una spinta ulteriore alla sensibilità e alla reattività del gioco. Il miglioramento visivo inoltre ti consente di giocare con una configurazione personalizzata.
                Prestazioni avanzate:
                Grazie al processore Qualcomm Snapdragon 730 con tecnologia di processo a 8nm, le prestazioni single-core della CPU sono migliorate del 35% e il consumo energetico è ridotto del 10%. Inoltre, l algoritmo AI migliora l efficienza del processore fino a 2,6 volte. Prestazioni sempre all altezza.
                Pop up fluido, perfettamente nascosta:
                La fotocamera selfie pop up lascia spazio a uno schermo più ampio, con un Display Full Screen con rapporto schermo-corpo del 91,9%. Appena visibile finché non tocchi la app Fotocamera, si apre in modo fluido e accompagnata da un effetto sonoro personalizzabile.
                Un mondo nuovo, a portata di tocco:
                Lo sblocco è ora più veloce che mai. La nuova tecnologia di riconoscimento delle impronte digitali impiega il più recente modulo di rilevamento ottico a schermo, espandendo l area di rilevamento del 100% tramite l impiego di un algoritmo aggiornato che rende lo sblocco più veloce, intelligente e sicuro.
                Finitura posteriore fiammante:
                Il retro di Mi 9T è delicato e contemplativo, finché la luce non lo colpisce e il suo ardito design fiammante prende vita. La sua personalità è resa ancora più profonda dal classico design in fibra di carbonio nero. Grazie alla curvatura 3D è straordinariamente liscio e si adatta perfettamente alla tua mano.',
                'prezzo' => 379, 'scontoPerc' => 13, 'sconto' => 0, 'image' => 'mi9t.jpg'],
            ['nome' => 'XIAOMI Mi 10', 'catId' => 5, 'marca' => 'XIAOMI', 'dimDisplay' => 6.67, 'risDisplay' => '1080x2340', 
                'processore' => 'Qualcomm Snapdragon 865', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'Adreno 650',
                'fotocamera' => '108 MP Ƒ/1.7 + 13 MP Ƒ/2.4 + 13 MP Ƒ/2.4 +2MP Ƒ/2.4 + Frontale 20 MP Ƒ/2.0', 
                'descShort' => 'Dimensioni display: 6.67
                Risoluzione display: 1080x2340
                Processore: Qualcomm Snapdragon 865
                Ram: 8
                Memoria: 128
                Scheda grafica: Adreno 650
                Fotocamera: 108 MP Ƒ/1.7 + 13 MP Ƒ/2.4 + 13 MP Ƒ/2.4 +2MP Ƒ/2.4 + Frontale 20 MP Ƒ/2.0
                OS: Android 10', 
                'descLong' => 'I confini della fotografia vengono ridefiniti
                Mi 10, come abbiamo già visto, ha una quad camera da 108MP oltre al sensore principale, sono presenti un obiettivo ultra-grandangolare da 13MP, una lente macro adatta per gli scatti ravvicinati e un sensore di profondità che permette di creare l’effetto bokeh nei ritratti. Ma Mi 10 non è solo scatti magnifici grazie alla tecnologia UHD, potrai registrare video spettacolari a 8K a 30fps, anche nelle modalità Ritratto e Vlog.
                Colori vivi e visione ampia con il DotDisplay 6,67" a 90Hz
                Il display di Mi 10 è un AMOLED curvo 3D da 6,67” la tecnologia TrueColor permette di avere una gestione del colore semplicemente spettacolare e realistica, la stessa usata dagli specialisti della colorimetria, come designer e videomaker. L’elevata frequenza di refresh dello schermo a 90Hz con tecnologia SmoothSync e il sistema audio stereo rendono Mi 10 un device perfetto anche per il gaming.
                Prestazioni top con Snapdragon 865
                Appoggiandosi al chipset Qualcomm Snapdragon 865, Mi 10 ha un processore octa-core Kyro 585 che permette un’ottimizzazione e un’efficienza energetica semplicemente spettacolare. E grazie al modem X55, sarà possible vivere l’incredibile velocità della connettività 5G. La stabilità è sostenuta dalla tecnologia MultiLink 5G che permette di connettersi simultaneamente a tre reti (Wi-Fi 2.4G, Wi-Fi 5G e dati mobili) nello stesso momento. La RAM LPDDR5 e la memoria UFS 3.0 sono le chicche che rendono questo dispositivo un concentrato di potenza e rapidità.
                Esperienza sonora avvolgente e bilanciata
                Il design degli altoparlanti a 7 magneti permette un’intensità del volume potenzialmente raddoppiata e aumenta la gamma dinamica. Mi 10 Pro, inoltre, include anche ottimizzazioni acustiche stereo a seconda dello scenario, offrendo un esperienza audio ancora più coinvolgente.
                Ricarica ultra-rapida e maxi batteria
                Mi 10 dispone della ricarica a 30W, sia cablata che wireless questo tipo di flessibilità permette di adattarsi perfettamente alle abitudini di chi decide di sceglierlo, qualsiasi esse siano. Un’ulteriore chicca di Mi 10 è la possibilità di usarlo per ricaricare altri device la ricarica wireless inversa è una funzione perfetta per chi viaggia e lavora a ritmi sostenuti. Oltre alle eccezionali possibilità di ricarica, Mi 10 dispone di una maxi batteria da 4780mAh e di un caricatore da 30W, presente direttamente nella confezione d’acquisto.
                Numero 1 di performance e connettività 5G',
                'prezzo' => 999, 'scontoPerc' => 10, 'sconto' => 0, 'image' => 'mi10.jpg'],
            ['nome' => 'XIAOMI Mi 10 Pro', 'catId' => 5, 'marca' => 'XIAOMI', 'dimDisplay' => 6.67, 'risDisplay' => '1080x2340', 
                'processore' => 'Qualcomm Snapdragon 865', 'ram' => 8, 'memoria' => 256, 'schedaGraf' => 'Adreno 650',
                'fotocamera' => '108 Ƒ/1.7 + Zoom 10X 8MP Ƒ/2.0 + Zoom 2X 12MP Ƒ/2.0 + 20 MP + Frontale 20 MP Ƒ/2.0', 
                'descShort' => 'Dimensioni display: 6.67
                Risoluzione display: 1080x2340
                Processore: Qualcomm Snapdragon 865
                Ram: 8
                Memoria: 256
                Scheda grafica: Adreno 650
                Fotocamera: 108 Ƒ/1.7 + Zoom 10X 8MP Ƒ/2.0 + Zoom 2X 12MP Ƒ/2.0 + 20 MP + Frontale 20 MP Ƒ/2.0
                OS: Android 10', 
                'descLong' => 'Camera Pro da 108MP
                Software e hardware lavorano insieme per realizzare innovazioni in termini di velocità, qualità di visualizzazione ed esperienza utente. Una fotocamera più potente e reattiva ti consente di scattare foto più vivide da 108MP utilizzando il 40% di spazio in meno.
                Ampissimo DotDisplay TrueColor 90Hz
                Ti presentiamo il miglior display di Xiaomi di sempre! Con una frequenza di aggiornamento di 90Hz e una frequenza di campionamento di 180Hz, lo schermo è più fluido che mai e ha una sensibilità notevolmente migliorata. Allo stesso tempo, è il display Xiaomi con la migliore fedeltà cromatica.
                Qualcomm Snapdragon 865
                La CPU dell anno. CPU, GPU e prestazioni AI migliorate. La piattaforma 5G più veloce e potente che mai.
                Suono stereo bilanciato
                Per offrirti i migliori altoparlanti audio per smartphone, la serie Mi 10 introduce due innovazioni un design stereo bilanciato e altoparlanti a 7 magneti. Questo raddoppia il volume e aumenta notevolmente la gamma dinamica. Un hardware leader nel settore è combinato con effetti sonori stereo esclusivi ottimizzati per diversi scenari, per un esperienza audio ancora più coinvolgente.
                Batteria da 4500mAh (typ) + ricarica rapida cablata da 50W
                100% di ricarica in soli 40 minuti. Più veloce di quanto pensi.
                Caricabatterie integrato da 65W
                Compatibile con il protocollo PD/PPS, può fornire una ricarica rapida per laptop, smartphone, Switch e altri dispositivi.
                Entra nell era del 5G
                Sperimenta l Internet del futuro con il supporto per 5G e Wi-Fi 6',
                'prezzo' => 1099, 'scontoPerc' => 5, 'sconto' => 0, 'image' => 'mi10pro.jpg'],
            ['nome' => 'ONEPLUS 8', 'catId' => 5, 'marca' => 'ONEPLUS', 'dimDisplay' => 6.55, 'risDisplay' => '1080x2400', 
                'processore' => 'Qualcomm Snapdragon 865', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'Adreno 650',
                'fotocamera' => '48 Ƒ/1.75 + Grandangolo 16MP Ƒ/2.2 + Macro 2MP Ƒ/2.4 + Frontale 16 MP Ƒ/2.4', 
                'descShort' => 'Dimensioni display: 6.55
                Risoluzione display: 1080x2400
                Processore: Qualcomm Snapdragon 865
                Ram: 8
                Memoria: 128
                Scheda grafica: Adreno 650
                Fotocamera: 48 Ƒ/1.75 + Grandangolo 16MP Ƒ/2.2 + Macro 2MP Ƒ/2.4 + Frontale 16 MP Ƒ/2.4
                OS: Android 10', 
                'descLong' => 'Display ultra fluido - alta risoluzione con frequenza di aggiornamento 90-hz - scorrere, swipe e cambiare da un app all altra è semplice e veloce
                16,6 cm / 6.55” amoled display – per un esperienza multimediale senza precedenti, reattività al tocco istantanea, velocità superiore e affascinante nitidezza
                Fotocamera tripla ultra nitida - fotocamera principale 48mp, ultra quadrangolo 16mp, 2mp macro e fotocamera frontale 16mp, nightscape 2.0, studio lightining, super slow motion fino a 460 fps, raw image, ai scene detection
                8 GB ram e 128 GB di memoria interna per una performance superiore, alta velocità / processore ad alte prestazioni qualcomm snapdragon 865 con connettività 5g
                Batteria 4300 mAh - tecnologia di ricarica veloce warp charge 30t di nuova generazione (pronto in 20 minuti) / sistema operativo android 10',
                'prezzo' => 719, 'scontoPerc' => 3, 'sconto' => 0, 'image' => 'oneplus8.jpg'],
            ['nome' => 'ONEPLUS 8 Pro', 'catId' => 5, 'marca' => 'ONEPLUS', 'dimDisplay' => 6.78, 'risDisplay' => '1440x3168', 
                'processore' => 'Qualcomm Snapdragon 865', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'Adreno 650',
                'fotocamera' => '48 Ƒ/1.78 + Grandangolo 48MP Ƒ/2.2 + Zoom 3x 8MP Ƒ/2.44 + Color Filter 5MP Ƒ/2.4 + Frontale 16 MP Ƒ/2.4', 
                'descShort' => 'Dimensioni display: 6.78
                Risoluzione display: 1440x3168
                Processore: Qualcomm Snapdragon 865
                Ram: 8
                Memoria: 128
                Scheda grafica: Adreno 650
                Fotocamera: 48 Ƒ/1.78 + Grandangolo 48MP Ƒ/2.2 + Zoom 3x 8MP Ƒ/2.44 + Color Filter 5MP Ƒ/2.4 + Frontale 16 MP Ƒ/2.4
                OS: Android 10', 
                'descLong' => 'Display 3D amoled super fluido - alta risoluzione con frequenza di aggiornamento 120-hz - scorrere, swipe e cambiare da un app all altra è semplice e veloce
                17.5 cm / 6.78” fluid amoled display – per un esperienza multimediale senza precedenti, reattività al tocco istantanea, velocità superiore e affascinante nitidezza
                Fotocamera quadrupla ultra nitida - fotocamera principale 48mp, 3x hybrid zoom, ultra quadrangolo 48mp, teleobiettivo 8mp, lente IR 5mp e fotocamera frontale 16mp; super slow motion fino a 960 fps ti farà vedere cose mai viste prima; ulteriori funzionalità: ultrashot, nightscape, studio lighting, portrait, pro mode, panorama, hdr, ai scene detection, raw image
                8 GB ram e 128 GB di memoria interna per una performance superiore, alta velocità / processore ad alte prestazioni qualcomm snapdragon 865 con connettività 5g
                Batteria 4510 mAh - ricarica veloce senza fili e tecnologia warp charge 30t (pronto in 20 minuti) / sistema operativo android 10',
                'prezzo' => 919, 'scontoPerc' => 2, 'sconto' => 0, 'image' => 'oneplus8pro.jpg'],
            ['nome' => 'APPLE MacBook Air 2020', 'catId' => 6, 'marca' => 'APPLE', 'dimDisplay' => 13.3, 'risDisplay' => '2560x1600', 
                'processore' => 'i5', 'ram' => 8, 'memoria' => 256, 'schedaGraf' => 'INTEL Iris Plus Graphics',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 13.3
                Risoluzione display: 2560x1600
                Processore: i5
                Ram: 8 
                Memoria: 256
                Scheda grafica: INTEL Iris Plus Graphics
                Fotocamera: /
                OS: MacOS', 
                'descLong' => 'Ultraleggero, e supersonico:
                Incredibilmente sottile e leggero, MacBook Air è più potente che mai. Ora ha un brillante display Retina, la nuova Magic Keyboard, Touch ID, processori fino a due volte più scattanti,1 grafica più veloce e il doppio dello spazio di archiviazione. Con il suo elegante guscio in alluminio riciclato al 100% è il Mac più eco-friendly mai visto.2 E ti dà un giorno intero di batteria: il Mac più amato da tutti è pronto a diventare il tuo notebook superportatile e superversatile.
                Fatti avvolgere da quattro milioni di pixel:
                C’è da restare a bocca aperta: con più di quattro milioni di pixel e una risoluzione di 2560×1600, le immagini sono ultradettagliate, quasi più vive del vero. Il testo è nitido e definito. E con la tecnologia True Tone, che regola in automatico il bilanciamento del bianco in base al tipo di luce dell’ambiente in cui ti trovi, pagine web e email hanno la stessa naturalezza della carta stampata. Milioni di colori rendono tutto più vivido e brillante, ma non basta: il vetro del display si spinge fino al margine del guscio, così puoi concentrarti meglio su quello che vedi sullo schermo. E vedrai quanto ti piacerà.
                Trackpad Force Touch:
                Il trackpad Force Touch è fra i migliori al mondo. Ti permette di interagire con il tuo Mac in tanti modi diversi a seconda dell’intensità del tuo tocco. Hai sempre un controllo preciso e una risposta uniforme ovunque tu faccia clic. E c’è un sacco di spazio per gesti Multi-Touch come pizzicare e zoomare. Sembra fatto apposta per le tue dita.
                La tua impronta è la tua password:
                La comodità e la sicurezza del Touch ID ora arrivano anche su MacBook Air. Basta appoggiare il dito sul sensore Touch ID e il Mac si sblocca: detto, fatto. La tua impronta digitale ti fa accedere all’istante anche a elementi protetti come documenti, note e impostazioni di sistema, senza dover inserire la password ogni volta. E lo shopping online è più semplice: scegli Apple Pay al momento del pagamento e completi l’acquisto con un tocco; non devi nemmeno inserire l’indirizzo di spedizione o fatturazione, e i dati della tua carta non vengono mai condivisi con nessuno. Con Touch ID, le tue informazioni personali restano tue e basta.
                Il suono è diventato grande:
                Grazie alle più avanzate tecnologie in fatto di elaborazione e regolazione del suono, l’audio di MacBook Air è cresciuto, in tutti i sensi. Gli altoparlanti stereo hanno bassi due volte più potenti e il 25% di volume in più. E quando ascolti una canzone o guardi un film, la maggiore ampiezza del suono stereo crea un’esperienza sonora ancora più coinvolgente. La videocamera FaceTime permette videochiamate individuali o di gruppo in alta definizione. In più, il sistema a tre microfoni rileva con precisione la tua voce quando chiami con FaceTime, usi la funzione Dettatura e parli a Siri.',
                'prezzo' => 1529, 'scontoPerc' => 3, 'sconto' => 0, 'image' => 'macbookair2020.jpg'],
            ['nome' => 'APPLE MacBook Pro 13 2019', 'catId' => 6, 'marca' => 'APPLE', 'dimDisplay' => 13.3, 'risDisplay' => '2560x1600', 
                'processore' => 'i5', 'ram' => 8, 'memoria' => 512, 'schedaGraf' => 'INTEL Iris Plus Graphics 655',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 13.3
                Risoluzione display: 2560x1600
                Processore: i5
                Ram: 8 
                Memoria: 512 
                Scheda grafica: INTEL Iris Plus Graphics 655
                Fotocamera: /
                OS: MacOS', 
                'descLong' => 'Potenza portatile:
                Con MacBook Pro, il notebook raggiunge livelli mai visti di potenza, leggerezza e praticità. Processori e memoria ad alte prestazioni, grafica evoluta, archiviazione superveloce e molto di più: hai tutto quel che serve per far volare le tue idee. In un design supercompatto e in meno di 1,4 kg.
                Processore:
                La potenza batte nei suoi core.
                Con il processore Intel quad-core di ottava generazione, MacBook Pro 13" è all’altezza delle sfide più impegnative. Anche le operazioni più complesse del tuo lavoro saranno una passeggiata: ogni volta che scrivi codice, fai il rendering di modelli 3D, aggiungi effetti speciali, esegui layering multitraccia o codifichi video, sai che tutto andrà velocissimo.
                Performance grafiche che ti lasceranno a occhi aperti:
                Sul MacBook Pro da 13" la grafica integrata è velocissima: merito dei 128MB di DRAM incorporata, il doppio rispetto alla generazione precedente. Con performance così, avrai più tempo per la parte più importante del tuo lavoro: creare e progettare.
                Grafica di livello desktop, senza il desktop:
                Blackmagic Design ha creato due GPU esterne (eGPU) ideali per MacBook Pro:11 sono pensate per darti performance grafiche di livello desktop senza farti rinunciare alla portabilità del notebook. Racchiuse in un guscio in alluminio all-in-one, le eGPU di Blackmagic sono potenti ma silenziose, ricaricano il tuo Mac via Thunderbolt 3 e hanno connessioni I/O integrate per collegare allo stesso tempo un display Thunderbolt 3 e diversi accessori, compresi quelli per la realtà virtuale. Scegli la eGPU Blackmagic per mettere il turbo alle app professionali e goderti giochi superfluidi, o vai ancora oltre con la eGPU Pro: avrai prestazioni grafiche da workstation per sfrecciare nei flussi di lavoro più complessi e creare contenuti VR a velocità incredibili.
                Le tue dita avranno nuovi poteri:
                Su tutti i MacBook Pro la Touch Bar prende il posto dei tasti funzione nella parte superiore della tastiera e li sostituisce con comandi molto più versatili e intelligenti. È comodissima perché cambia automaticamente in base a quello che fai, mostrandoti in modo intuitivo i comandi che ti servono, nel momento in cui ti servono: controlli di sistema come volume e luminosità, funzioni interattive per modificare o sfogliare i contenuti, suggerimenti smart mentre scrivi, emoji e tantissimo altro.',
                'prezzo' => 2349, 'scontoPerc' => 10, 'sconto' => 0, 'image' => 'macbookpro13.jpg'],
            ['nome' => 'APPLE MacBook Pro 16 2019', 'catId' => 6, 'marca' => 'APPLE', 'dimDisplay' => 16, 'risDisplay' => '3072x1920', 
                'processore' => 'i7', 'ram' => 16, 'memoria' => 512, 'schedaGraf' => 'AMD Radeon Pro 5300M',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 16
                Risoluzione display: 3072x1920
                Processore: i7
                Ram: 16
                Memoria: 512 
                Scheda grafica: AMD Radeon Pro 5300M
                Fotocamera: /
                OS: MacOS', 
                'descLong' => 'Potenza all’immaginazione:
                Pensato per chi ogni giorno sfida i limiti e inventa nuove possibilità, questo MacBook Pro è di gran lunga il notebook più potente che abbiamo mai creato. Ha uno spettacolare display Retina da 16", processore ultraveloce, grafica di nuova generazione, più autonomia di ogni altro MacBook Pro, una nuova Magic Keyboard e tantissimo spazio di archiviazione. È il massimo dei notebook professionali, per chi a un notebook chiede il massimo.
                Un grandissimo spazio di lavoro per fare cose bellissime:
                Il nuovo MacBook Pro ha uno spettacolare display Retina da 16", il più grande mai creato per un notebook Mac. Con una luminosità di 500 nit ti dà bianchi splendenti e una resa incredibile nelle parti più illuminate, ma restituisce neri profondi grazie al preciso allineamento delle molecole di cristalli liquidi. E l’ampia gamma cromatica P3 produce immagini e video brillanti e realistici. Ovunque ti trovi, vedrai sempre il tuo lavoro nella luce migliore.
                Lavora alla velocità del pensiero:
                Con MacBook Pro 16" il notebook raggiunge prestazioni mai viste. Il processore Intel Core i9 ti offre fino a 8 core e 16 thread di potenza di elaborazione, e grazie a un design termico evoluto può sostenere più a lungo performance ancora più elevate. E rispetto a un MacBook Pro quad-core, avrai prestazioni fino a 2,1 volte migliori. Quando esegui il layering di decine di tracce ed effetti, fai il rendering di modelli 3D o vuoi scrivere e testare codice, andrai veloce come il vento.
                Il superpotere di plasmare la realtà:
                La grafica AMD Radeon Pro serie 5000M garantisce prestazioni mai viste su un MacBook Pro. Nella configurazione di base, MacBook Pro 16" è oltre due volte più veloce dello stesso modello di generazione precedente: quando lavori con video Ultra HD, la riproduzione è impeccabile e i rendering sono più rapidi. E puoi anche scegliere di avere 8GB di VRAM GDDR6: rispetto alla configurazione con Radeon Pro Vega 20, vuol dire performance fino all’80% più scattanti per i lavori più impegnativi, come il color grading in DaVinci Resolve.',
                'prezzo' => 2799, 'scontoPerc' => 7, 'sconto' => 0, 'image' => 'macbookpro16.jpg'],
            ['nome' => 'HP Spectre x360', 'catId' => 7, 'marca' => 'HP', 'dimDisplay' => 13.3, 'risDisplay' => '1920 x 1080', 
                'processore' => 'i7', 'ram' => 8, 'memoria' => 512, 'schedaGraf' => 'INTEL Iris Plus Graphics',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 13.3
                Risoluzione display: 1920 x 1080
                Processore: i7
                Ram: 8 
                Memoria: 512 
                Scheda grafica: INTEL Iris Plus Graphics
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Porta il lavoro e l intrattenimento a un nuovo livello con l ultracompatto Spectre x360, dotato di uno straordinario display ad alta definizione quasi senza bordi. La batteria a elevata autonomia ti permette di lavorare e divertirti senza limiti. Questo PC convertibile di straordinaria qualità è realizzato da un singolo blocco di alluminio, e presenta innovative funzionalità di sicurezza, per garantire la tua privacy ovunque ti portino il tuo lavoro e le tue passioni.
                Ideale per il lavoro. Perfetto per l intrattenimento
                Grazie alla batteria a elevata autonomia, puoi lavorare con la massima efficienza per tutta la giornata e concederti il meritato relax. La connettività WiFi Gigabit consente di restare sempre connessi alle proprie passioni.
                Potenza senza compromessi per tutte le tue passioni
                Con il potente processore Intel® Core™, video editing e streaming viaggiano a una velocità incredibile. Visualizza i tuoi contenuti con una qualità straordinaria sul display Corning® Gorilla® Glass NBT™ ad alta definizione e quasi senza bordi.
                Progettato pensando alla tua privacy
                Scopri le innovative funzionalità di sicurezza, tra cui il Webcam Kill Switch, per una privacy a prova di hacker, e il pulsante di disattivazione del microfono con indicatore LED.',
                'prezzo' => 1349, 'scontoPerc' => 10, 'sconto' => 0, 'image' => 'spectre360.jpg'],
            ['nome' => 'DELL Xps 13 2020', 'catId' => 7, 'marca' => 'DELL', 'dimDisplay' => 13.4, 'risDisplay' => '3840x2400', 
                'processore' => 'i7', 'ram' => 16, 'memoria' => 512, 'schedaGraf' => 'INTEL Iris Plus Graphics',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 13.4
                Risoluzione display: 3.840x2.400
                Processore: i7
                Ram: 16
                Memoria: 512 
                Scheda grafica: INTEL Iris Plus Graphics
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Design compatto del notebook da 13 pollici
                Lo straordinario display InfinityEdge su 4 lati ci consente di offrire un display 16:10 più grande del 7% rispetto al monitor da 13", il tutto in un formato più piccolo del 2% rispetto a prima, con un rapporto tra schermo e corpo del 91,5%.
                Potenza garantita
                Con i processori mobile Intel® Core™ di decima generazione, ora è possibile sfruttare un esperienza di intrattenimento incredibilmente coinvolgente su un notebook estremamente sottile e leggero. I sistemi alimentati da processori Intel® Core™ di decima generazione con le più recenti schede grafiche Intel® Iris® Plus rappresentano uno straordinario passo avanti per il gaming, lo streaming e la creatività, con un esperienza più fluida, dettagliata e più vivida che mai su dispositivi altamente portatili. Quando vedi l icona "Engineering for mobile performance" accanto a determinate configurazioni, sai che sono state progettate per stare al passo con la tua vita frenetica.
                Display senza eguali
                Sfrutta al meglio la gamma dinamica superiore dei contenuti HDR con la tecnologia Dolby Vision™, in grado di fornire colori mai visti prima sui display PC SDR. I contenuti Dolby Vision™ possono offrire riflessi fino a 40 volte più luminosi e neri fino a 10 volte più profondi. Inoltre, lo straordinario display DisplayHDR 400 con certificazione VESA sul pannello 4K+ opzionale rende disponibili oltre 16 milioni colori con profondità e dimensione come mai prima d ora.
                Avvio in un istante 
                Un sensore integrato nel coperchio consente di aprire il coperchio ed effettuare l accensione in millisecondi, indipendentemente dallo stato di alimentazione.
                La password sei tu
                Puoi scegliere tra due modi di accesso sicuri e personalizzati. La fotocamera a infrarossi con Windows Hello riconosce i tratti del volto, sbloccando il sistema XPS con la tecnologia sicura di riconoscimento del volto. Il lettore di impronte digitali integrato nel tasto di accensione consente di accedere con un semplice tocco.',
                'prezzo' => 1899, 'scontoPerc' => 8, 'sconto' => 0, 'image' => 'xps13.jpeg'],
            ['nome' => 'MICROSOFT Surface Go', 'catId' => 7, 'marca' => 'MICROSOFT', 'dimDisplay' => 10, 'risDisplay' => '1800x1200', 
                'processore' => 'i5', 'ram' => 8, 'memoria' => 128, 'schedaGraf' => 'INTEL HD 615',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 10
                Risoluzione display: 1800x1200
                Processore: i5
                Ram: 8 
                Memoria: 128
                Scheda grafica: INTEL HD 615
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Surface Go offre ogni giorno le prestazioni di un laptop, la portabilità di un tablet e un eccezionale touchscreen con la potenza di Windows 10 Home in modalità S.¹ Cover con tasti Signature per Surface Go e Penna per Surface venduti separatamente.',
                'prezzo' => 599, 'scontoPerc' => 17, 'sconto' => 0, 'image' => 'surfacego.jpg'],
            ['nome' => 'MICROSOFT Surface Pro 7', 'catId' => 7, 'marca' => 'MICROSOFT', 'dimDisplay' => 12.3, 'risDisplay' => '2736x1824', 
                'processore' => 'i7', 'ram' => 16, 'memoria' => 256, 'schedaGraf' => 'INTEL Iris Plus Graphics',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 12.3
                Risoluzione display: 2736x1824
                Processore: i7
                Ram: 16
                Memoria: 256 
                Scheda grafica: INTEL Iris Plus Graphics
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Il nuovo Surface Pro 7 è più potente che mai, con un veloce processore Intel® Core™, batteria e grafica migliorate e più connessioni per l operatività multitasking.
                Connettiti e crea in tutta comodità
                Lavora e gioca praticamente ovunque. Ultrasottile e leggero, Surface Pro 7 si adatta a te grazie alla versatilità laptop/tablet e alla maggiore connettività con le porte USB-A e USB-C®.
                Personalizza Surface con i suoi accessori
                Per lavorare ovunque vuoi, trasforma Surface Pro 7 in un computer portatile completo con la Cover con tasti Signature, la Penna per Surface e Surface Arc Mouse, scegliendo e abbinando vari colori.
                Potenza di nuova generazione
                Dai vita alle tue idee ovunque con la potenza e le innovazioni di Surface Pro 7. Con il potente processore Intel® Core™, la ricarica rapida, la batteria di lunga durata1 e Accesso immediato, torna al lavoro ogni volta che ti coglie l ispirazione.
                Intrattenimento di prima classe, Wi-Fi e batteria di lunga durata
                Alimentato da un processore Intel® Core™ di decima generazione, Surface Pro 7 ti offre il meglio: multitasking più veloce, intrattenimento di grande qualità, eccellenti prestazioni Wi-Fi e una batteria di lunga durata.
                Fai di più con Windows 10 e Microsoft 365
                Windows 10 Home4 offre funzionalità note come Windows Hello per accedere senza password. Con OneDrive puoi conservare foto e file al sicuro nel cloud.',
                'prezzo' => 1699, 'scontoPerc' => 12, 'sconto' => 0, 'image' => 'surfacepro7.jpg'],
            ['nome' => 'ACER Swift 3', 'catId' => 7, 'marca' => 'ACER', 'dimDisplay' => 14, 'risDisplay' => '1920x1080', 
                'processore' => 'Ryzer 5', 'ram' => 8, 'memoria' => 512, 'schedaGraf' => 'AMD Radeon Vega 8 Graphics',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 14
                Risoluzione display: 1920x1080
                Processore: Ryzer 5
                Ram: 8 
                Memoria: 512 
                Scheda grafica: AMD Radeon Vega 8 Graphics
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Design snello e intelligente
                Un laptop dalla spiccata eleganza, con forme lussuosamente sottili e una moderna cornice in metallo. 
                Prestazioni potenziate
                Scegli un laptop che ti consente di restare sempre attivo senza limitare la tua libertà di movimento, con la combinazione di velocità, efficienza e potenza, tutto in un unico dispositivo.
                Sottile ed elegante
                Il design sottile non è solo una caratteristica. È un dato di fatto. Un modo per affermare la tua indipendenza e il tuo stile.
                Il tocco metallico
                L elegante corpo interamente in alluminio5 risulta freddo al tatto e conferisce al laptop un tocco di personalità.
                Vedere per credere
                Con uno schermo incredibilmente ampio, i colori nitidi e realistici rivivono con una risoluzione Full HD 1080p
                Lettura delle impronte digitali
                Windows Hello è la funzionalità di accesso senza password per sbloccare nel modo più rapido e sicuro i tuoi dispositivi Windows, le app e i siti Web.
                Elaborazione dei dati perfetta
                I nostri processori di ultima generazione ti permettono di svolgere qualsiasi tipo di mansione: dai noiosi lavori giornalieri alle attività più complesse.
                Produttività prolungata
                Swift 3 incrementa l efficienza con una durata della batteria superiore e un design dual-storage, consentendo di eseguire le attività di elaborazione per l intera giornata.',
                'prezzo' => 649, 'scontoPerc' => 3, 'sconto' => 0, 'image' => 'swift3.jpg'],
            ['nome' => 'HUAWEI MateBook D 15', 'catId' => 7, 'marca' => 'HUAWEI', 'dimDisplay' => 15.6, 'risDisplay' => '1920x1080', 
                'processore' => 'Ryzer5', 'ram' => 8, 'memoria' => 256, 'schedaGraf' => 'AMD Radeon Vega 8 Condivisa',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 15.6
                Risoluzione display: 1920x1080
                Processore: Ryzer 5
                Ram: 8 
                Memoria: 256
                Scheda grafica: AMD Radeon Vega 8 Condivisa
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Ampia visione, dimensioni ridotte:
                HUAWEI MateBook D da 15,6 pollici è spesso appena 16,9 mm e le sue cornici da 6,2 mm* offrono un sorprendente rapporto corpo-schermo dell 83%. Una piccola rivoluzione dal punto di vista della tecnologia e del design, che ti regalerà la sensazione di possedere un portatile dalle dimensioni ridotte.
                Leggerezza sempre e ovunque:
                Lo spessore di 16,9 mm di HUAWEI MateBook D e il suo corpo in alluminio dal peso di 1,9 Kg lo rendono leggero, sottile e facile da trasportare. Adesso potrai fare ciò che vorrai quando vorrai.
                Progettato con precisione:
                La tecnica di finitura diamantata CNC trasforma il touchpad e il pulsante d accensione di HUAWEI MateBook D in un entusiasmante esperienza visiva ogni volta che lo apri e lo utilizzi.
                Oltre l immaginazione:
                Il display IPS da 15,6 pollici offre una risoluzione di 1920 x 1080, angoli di visione di 178 gradi e rapporto d aspetto 16:9. Film, foto, il mondo: tutto sarà straordinariamente più vivido.
                Esperienza immersiva:
                Grazie agli altoparlanti progettati con lo sforzo congiunto di HUAWEI e Dolby, il sistema audio Dolby Atmos® offre un suono cristallino, naturale e totalizzante, capace di catapultarti nel mezzo dell azione. I suoni prendono vita e diventano più ricchi, profondi e fedeli.',
                'prezzo' => 649, 'scontoPerc' => 8, 'sconto' => 0, 'image' => 'matebookd15.jpg'],
            ['nome' => 'LG Gram 14', 'catId' => 7, 'marca' => 'APPLE', 'dimDisplay' => 14, 'risDisplay' => '1920x1080', 
                'processore' => 'i5', 'ram' => 8, 'memoria' => 256, 'schedaGraf' => 'INTEL UHD 620',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 14
                Risoluzione display: 1920x1080
                Processore: i5
                Ram: 8 
                Memoria: 256
                Scheda grafica: INTEL UHD 620
                Fotocamera: /
                OS: Windows 10', 
                'descLong' => 'Compatto e ultra-leggero
                LG Gram 14Z990 ridefinisce gli standard in termini di portabilità abbinando del display da 14" ad un peso incredibilmente ridotto: 995g. Questo lo rende estremamente semplice da trasportare ovunque preferisci.
                Lavora senza pensieri per tutto il giorno
                La batteria da 72Wh ti consente di lavorare anche in movimento senza doverti preoccupare di collegare il dispositivo alla presa di corrente.
                Atto di forza
                LG Gram 14Z990 ha passato con successo il rigoroso test per lo standard MIL-STD-810G in materia di durabilità e affidabilità che verifica sette fattori tra cui resistenza ad urti, polvere e temperature.
                Un esperienza visiva ancora più emozionante
                Lo schermo IPS garantisce una straordinaria qualità dell immagine con una definizione di livello superiore. Lo schermo Full HD (1920X1080) unito alla gamma di colori con sRGB superiore al 96% permette di effettuare una regolazione cromatica ancora più precisa.',
                'prezzo' => 1299, 'scontoPerc' => 11, 'sconto' => 0, 'image' => 'gram14.jpg'],
            ['nome' => 'SAMSUNG Galaxy Chromebook', 'catId' => 8, 'marca' => 'SAMSUNG', 'dimDisplay' => 15.6, 'risDisplay' => '1920x1080', 
                'processore' => 'Intel Celeron N4000', 'ram' => 4, 'memoria' => 32, 'schedaGraf' => 'INTEL UHD 600',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 15.6
                Risoluzione display: 1920x1080
                Processore: Intel Celeron N4000
                Ram: 4
                Memoria: 32
                Scheda grafica: INTEL UHD 600
                Fotocamera: /
                OS: Chrome OS', 
                'descLong' => 'Progettato con una cornice minimizzata, il Chromebook Samsung 4+ offre più spazio per visualizzare i contenuti su un brillante schermo Full HD da 15,6 ".
                Accedi al mondo di Google. Utilizza Google Documenti, Google Drive, Google Play Store e altro.
                Con una connessione Wi-Fi Gigabit estremamente veloce, trasmetti in streaming o scarica rapidamente file di grandi dimensioni.
                Più livelli di protezione antivirus incorporati proteggono da malware dannoso. Gli aggiornamenti automatici ti assicurano sempre la protezione di sicurezza più recente.
                Fornisce fino a 10 ore di batteria con una carica completa che si ricarica rapidamente su un caricabatterie USB-C. Usa la tua voce per fare una richiesta e Google Assistant lo farà - sia che tu voglia aggiornare il tuo calendario o riprodurre un messaggio, prendere nota o controllare le notizie.',
                'prezzo' => 349, 'scontoPerc' => 14, 'sconto' => 0, 'image' => 'galaxychromebook.jpg'],
            ['nome' => 'GOOGLE Pixelbook Go', 'catId' => 8, 'marca' => 'GOOGLE', 'dimDisplay' => 13.3, 'risDisplay' => '1920x1080', 
                'processore' => 'M3', 'ram' => 8, 'memoria' => 64, 'schedaGraf' => '',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 13.3
                Risoluzione display: 1920x1080
                Processore: M3
                Ram: 8 
                Memoria: 64
                Scheda grafica: /
                Fotocamera: /
                OS: Chrome OS', 
                'descLong' => 'Ultra sottile e leggero: il Google Pixelbook Go è un ottimo strumento di auto-spiegazione. È progettato per essere portato con te ovunque ne abbiate bisogno. Ultra sottile e leggero, si può facilmente portare con sé il Pixelbook per lezioni, riunioni o semplicemente per la casa degli amici. E grazie allo splendido touch screen HD è possibile navigare facilmente e ogni immagine è in brillanti dettagli Ultra HD. Avvio super veloce, non aspettare.
                Il Pixelbook Go ha la potenza di accelerare praticamente qualsiasi cosa. Si avvia in pochi secondi e il processore di 8 generazione è veloce e reattivo. Inoltre è dotato di protezione anti-virus integrata e aggiornamenti automatici, in modo che il Chromebook rimanga al sicuro e non rallenta nel corso del tempo. Fino a 12 ore di durata della batteria. Avete una lunga giornata di giorno? Il Google Pixelbook è pronto all uso. Con fino a 12 ore di durata della batteria, non dovrai più scavare il caricabatterie. E quando hai bisogno di ricaricare, avrai 2 ore di durata della batteria con soli 20 minuti di ricarica.',
                'prezzo' => 1249, 'scontoPerc' => 8, 'sconto' => 0, 'image' => 'pixelbookgo.jpeg'],
            ['nome' => 'HP Chromebook 14', 'catId' => 8, 'marca' => 'HP', 'dimDisplay' => 14, 'risDisplay' => '1920x1080', 
                'processore' => 'Intel Pentium Silver N5000', 'ram' => 4, 'memoria' => 64, 'schedaGraf' => 'INTEL UHD 605',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 14
                Risoluzione display: 1920x1080
                Processore: Intel Pentium Silver N5000
                Ram: 4
                Memoria: 64 
                Scheda grafica: INTEL UHD 605
                Fotocamera: /
                OS: Chrome OS', 
                'descLong' => 'HP Chromebook 14a-na0005nl Il meglio per il lavoro e l’intrattenimento, in un unico dispositivo. Con il laptop HP Chromebook con processore Intel® ancora più veloce, display da 35,6 cm (14"), altoparlanti stereo ottimizzati da B&O e la batteria a elevata autonomia, potrai lavorare con efficienza per tutta la giornata e goderti il meglio dell’intrattenimento Creato per stupire Il display micro-edge ad alta definizione e gli altoparlanti messi a punto dagli esperti del suono di B&O offrono un’esperienza di intrattenimento straordinaria. Progettato per te Tutta la potenza e le prestazioni che ti occorrono, grazie al processore Intel®, all’ampio spazio di storage e alla batteria a elevata autonomia. Pannello antiriflesso Anche se esposto alla luce diretta del sole, il monitor antiriflesso consente di godersi al meglio i contenuti preferiti. La speciale superficie riduce il riflesso dei raggi solari sul display quando ci si trova all’aria aperta. Scheda grafica Intel® UHD 605 Riproduci contenuti in 4K e divertiti con i tuoi giochi preferiti in 720p, senza la necessità di una scheda grafica dedicata. Con le eccezionali prestazioni grafiche Intel® UHD, questo PC farà la differenza in ogni tua attività. Un esperienza audio potente Con gli HP Dual Speakers e l audio custom-tuned in collaborazione con gli esperti B&O, l intrattenimento diventa estremamente coinvolgente e autentico. Lasciati trasportare dal suono. Display con cornice sottile Il design è studiato per aumentare l area di visualizzazione, inserendo uno schermo più grande in una cornice più piccola. Design sottile Porta sempre con te questo PC sottile e leggero anche in viaggio. Quando il tuo PC è in grado di seguirti ovunque, essere produttivi e divertirsi non è mai stato così facile. Google Assistant Lavora meglio e più velocemente con Google Assistant. Lavora in multitasking, interroga e controlla le funzioni per l’intrattenimento del laptop Chromebook, mantenendo le mani sempre libere grazie all’innovativo controllo vocale.',
                'prezzo' => 1249, 'scontoPerc' => 8, 'sconto' => 0, 'image' => 'hpchromebook14.jpg'],
            ['nome' => 'ASUS Chromebook Flip 12.5', 'catId' => 8, 'marca' => 'ASUS', 'dimDisplay' => 12.5, 'risDisplay' => '1920x1080', 
                'processore' => 'Intel Pentium 4415Y', 'ram' => 8, 'memoria' => 64, 'schedaGraf' => 'Intel HD Graphics 515',
                'fotocamera' => '', 
                'descShort' => 'Dimensioni display: 12.5
                Risoluzione display: 1920x1080
                Processore: Intel Pentium 4415Y
                Ram: 8 
                Memoria: 64 
                Scheda grafica: Intel HD Graphics 515
                Fotocamera: /
                OS: Chrome OS', 
                'descLong' => 'Il Chromebook Asus Flip C302 è tutto ciò che potremmo desiderare in un Chromebook premium. Questo è uno dei motivi per cui è uno dei migliori Chromebook in circolazione, anche dopo tutti questi anni dalla sua versione originale. 
                L Asus Chromebook Flip non è solo un fantastico Chromebook, potrebbe essere solo uno dei migliori laptop che abbia mai raggiunto gli scaffali fino ad oggi ... a seconda di ciò che stai cercando.',
                'prezzo' => 829, 'scontoPerc' => 10, 'sconto' => 0, 'image' => 'asusflipbook.jpg'],
            ['nome' => 'APPLE iPad Mini', 'catId' => 9, 'marca' => 'APPLE', 'dimDisplay' => 7.9, 'risDisplay' => '2048x1536', 
                'processore' => 'Apple A12 Bionic', 'ram' => 3, 'memoria' => 256, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => '7MP ƒ/2.2', 
                'descShort' => 'Dimensioni display: 7.9
                Risoluzione display: 2048 x 1536
                Processore: Apple A12 Bionic
                Ram: 3 
                Memoria: 256
                Scheda grafica: Proprietaria Apple 
                Fotocamera: 7MP ƒ/2.2
                OS: iOS 12', 
                'descLong' => 'Apple presenta iPad mini: ti conquista perché è piccolo ma in gamba. E oggi hai ancora più motivi per amarlo: il chip A12 Bionic con Neural Engine, il display Retina da 7,9" con tecnologia True Tone e il supporto di Apple Pencil per catturare al volo le tue idee ovunque ti colga l’ispirazione. Sempre mini, sempre più grandioso.
                Più che portatile. Quasi tascabile.
                iPad mini è sottile, leggero e portatile, perfetto per farti compagnia ovunque vai. Pesa appena 300 grammi ed è spesso solo 6,1 millimetri: puoi tenerlo con una mano sola, e quando scatta l’ispirazione lo sfili in un attimo dalla tasca o dalla borsa.
                Taglia extra small, potenza extra large.
                Il chip A12 Bionic con Neural Engine apre la strada a nuovi livelli di potenza e intelligenza. Grazie al machine learning (o apprendimento automatico) in tempo reale, riconosce gli schemi ricorrenti, fa previsioni e impara dall’esperienza. Così puoi usare app come Adobe Photoshop CC o vivere la realtà aumentata o ancora immergerti nei giochi più coinvolgenti con una grafica da console.
                La qualità del pixel che fa grande uno schermo.
                Nei 7,9" di iPad mini Apple ha racchiuso oltre 3 milioni di pixel. E li ha messi tutti al lavoro. Puoi leggere al parco o montare un video nel tuo studio: la luminosità del display, l ampia gamma cromatica e il rivestimento antiriflesso ti danno sempre dettagli fotorealistici e testi ultranitidi. E la tecnologia True Tone regola in modo dinamico il bilanciamento del bianco, così tutto quel che vedi ha un aspetto naturale sotto ogni luce.
                Filma in HD. Gioca in AR. Saluta in diretta.
                Con le due fotocamere di iPad mini scatti foto brillanti e giri video di qualità cinematografica. E puoi divertirti a fare un mondo di altre cose: videochiamare i tuoi amici con FaceTime, scansionare documenti e annotarli, e perfino scegliere i mobili del salotto usando la realtà aumentata.
                Sarà amore a prima scritta.
                Apple Pencil moltiplica il potenziale di iPad mini trasformandolo in un taccuino digitale che puoi portare sempre con te. Prendi appunti, firma documenti, compila moduli. O fai uno schizzo, disegna e dipingi per dare forma alle tue idee più creative ovunque sei.
                I tuoi dati sono tuoi. E solo tuoi.
                Come tutti i prodotti Apple, iPad mini è progettato per proteggere i tuoi dati e la tua privacy. Con Touch ID è facilissimo sbloccarlo e anche fare acquisti con Apple Pay, in tutta sicurezza. Appoggia il dito sul sensore Touch ID e il gioco è fatto.',
                'prezzo' => 629, 'scontoPerc' => 13, 'sconto' => 0, 'image' => 'ipadmini.jpeg'],
            ['nome' => 'APPLE iPad Air', 'catId' => 9, 'marca' => 'APPLE', 'dimDisplay' => 10.5, 'risDisplay' => '2224x1668', 
                'processore' => 'Apple A12 Bionic', 'ram' => 3, 'memoria' => 64, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => '8MP ƒ/2.4 + Frontale 7MP ƒ/2.2', 
                'descShort' => 'Dimensioni display: 10.5
                Risoluzione display: 2224x1668
                Processore: Apple A12 Bionic
                Ram: 3 
                Memoria: 64
                Scheda grafica: Proprietaria Apple 
                Fotocamera: 8MP ƒ/2.4 + Frontale 7MP ƒ/2.2
                OS: iOS 12', 
                'descLong' => 'Sa fare quasi tutto. E pesa quasi niente.
                iPad Air ha un grande display Retina da 10,5" ma il suo formato resta ultraportatile, perfetto per accompagnarti ovunque. È sottile, leggero e ha connessioni wireless evolute. E gli basta una sola carica per lavorare tutto il giorno: la batteria dura fino a 10 ore.
                Sempre connessi, ovunque.
                Con un Wi-Fi che raggiunge gli 866 Mbps e la tecnologia 4G LTE Advanced resti sempre in contatto col mondo, senza cavi e senza problemi. E la eSIM ti permette di scegliere con facilità un piano dati direttamente dal tuo iPad Air, anche quando sei all’estero.
                Affronta ogni task. Anche in multi­tasking.
                Il chip A12 Bionic con Neural Engine apre la strada a nuovi livelli di performance e intelli­genza: usa il machine learning (o apprendimento automatico) in tempo reale per trasformare il tuo modo di vivere la realtà aumentata, le foto, i giochi e tanto altro. Con una potenza così puoi montare un video, creare una presentazione, progettare un modello 3D, e guardare in streaming la tua serie preferita. Oppure fare tutte queste cose insieme.
                Grafica ultraveloce per giochi e app.
                Il motore grafico a quattro core del chip A12 Bionic ti dà tutta la potenza che serve per straordinarie esperienze di realtà aumentata, grafica spettacolare nelle app ed effetti fotorealistici nei giochi 3D.
                Tutto quello che fai è bellissimo.
                Immergiti in dieci pollici e mezzo di puro spettacolo: sul display Retina ad ampia gamma cromatica i video e i giochi sono ultranitidi e ricchi di dettagli realistici. E il tuo iPad può seguirti ovunque: la visione è sempre ideale grazie alla tecnologia True Tone, alla straordinaria luminosità e al rivestimento antiriflesso.
                True Tone. Si mette sempre nella luce migliore.
                La tecnologia True Tone regola dinamicamente il bilanciamento del bianco in base alla luce intorno a te, così le immagini hanno un aspetto naturale e gli occhi si stancano meno. E tu puoi leggere quanto vuoi, a letto la sera o al sole sulla spiaggia.
                Filma in HD. Gioca in AR. Saluta in diretta.
                Con le due fotocamere di iPad Air scatti splendide foto e giri video spettacolari in HD a 1080p. Ma c’è molto di più. Puoi videochiamare gli amici con FaceTime, anche in gruppo. Puoi scansionare un documento, firmarlo e spedirlo. Oppure puoi immergerti nei nuovi mondi della realtà aumentata.
                Realtà aumentata. Per lavoro, per studio, per gioco.
                La AR inserisce informazioni e oggetti digitali nell’ambiente in cui ti trovi per farti vivere la realtà in modi nuovi e sorprendenti. E iPad Air è il device perfetto per immergerti in queste esperienze: ha una fotocamera frontale e una posteriore, la potenza del chip A12 Bionic con Neural Engine, un grande display dai colori brillanti, e sensori che rilevano il movimento.
                Scrivi, disegna, firma e colora. Benvenuta, ispirazione.
                Apple Pencil è precisa, immediata e scorrevole come una penna o una matita, ma in più è incredibilmente versatile.4 E può trasformare il tuo iPad Air in un taccuino, una tela, o in qualsiasi altra cosa ti venga in mente.',
                'prezzo' => 589, 'scontoPerc' => 5, 'sconto' => 0, 'image' => 'ipadair.jpeg'],
            ['nome' => 'APPLE iPad Pro 2020 11', 'catId' => 9, 'marca' => 'APPLE', 'dimDisplay' => 11, 'risDisplay' => '2388x1668', 
                'processore' => 'Apple A12Z Bionic', 'ram' => 0, 'memoria' => 256, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => '12MP ƒ/1.8 + Ultra-grandangolare 10MP ƒ/2.4 + 2x zoom ottico + Frontale 7MP ƒ/2.2', 
                'descShort' => 'Dimensioni display: 11
                Risoluzione display: 2388 x 1668
                Processore: Apple A12Z Bionic
                Ram: /
                Memoria: 256
                Scheda grafica: Proprietaria Apple 
                Fotocamera: 12MP ƒ/1.8 + Ultra-grandangolare 10MP ƒ/2.4 + 2x zoom ottico + Frontale 7MP ƒ/2.2
                OS: iPad OS', 
                'descLong' => 'Tecnologia Liquid Retina:
                Il display Liquid Retina edge-to-edge non è solo bello e coinvolgente: è un incredibile concentrato di innovazioni.1 Come le tecnologie ProMotion e True Tone, che insieme alla migliore fedeltà cromatica del settore permettono immagini spettacolari e una risposta fulminea ai tuoi gesti. Semplicemente, è il display mobile più evoluto al mondo.
                Obiettivi professionali:
                Fotocamere evolute, grande display, prestazioni veloci e sensori di ultraprecisione: sono gli elementi che da sempre rendono ogni iPad estremamente versatile e capace. E adesso con iPad Pro puoi fare ancora di più. Il grandangolo e il nuovo ultra-grandangolo ti aiutano a comporre l’inquadratura perfetta quando scatti una foto o fai un video. E grazie ai microfoni di qualità professionale e all’audio a quattro altoparlanti, puoi perfino allestire un set multicamera per girare il tuo film.
                Scanner LiDAR:
                La tecnologia LiDAR (Light Detection and Ranging) serve a calcolare le distanze misurando il tempo che la luce impiega per raggiungere un oggetto e venire riflessa. È così fantascientifica che sarà utilizzata dalla NASA nella prossima missione su Marte. E ora è racchiusa in iPad Pro, grazie a un miracolo di ingegneria che ha permesso di miniaturizzarla adattandola a un dispositivo così sottile e leggero. Progettato ad hoc, questo scanner LiDAR si basa sul tempo di volo diretto (D-TOF) per misurare la luce riflessa da una distanza fino a 5 metri, sia in ambienti chiusi che all’aperto. Per farlo esegue una lettura a livello di fotone e a velocità nell’ordine dei nanosecondi, aprendo possibilità incredibili nel campo della realtà aumentata (AR) e non solo.
                Realtà aumentata:
                Sul nuovo iPad Pro, le app di AR danno risultati ancora più verosimili. Gli oggetti virtuali si inseriscono all’istante tra quelli fisici, e grazie a un sistema di occlusione migliorato riescono a passare davanti e dietro alle strutture del mondo reale. Anche la scansione dei movimenti e l’occlusione fra persone e oggetti virtuali sono più accurate che mai. E tutto questo permetterà a chi sviluppa le app di creare esperienze ancora più immersive.
                Fotocamera TrueDepth:
                La fotocamera frontale TrueDepth rende possibile il funzionamento di Face ID, la tecnologia di riconoscimento facciale più evoluta mai vista su un tablet (e su un computer). Ma ti permette anche di parlare con gli amici su FaceTime, di farti un selfie in modalità Ritratto, o di dare un tocco più personale alle conversazioni in Messaggi trasformandoti in un’Animoji.
                A12Z Bionic:
                Con il chip A12Z Bionic, iPad Pro surclassa la maggior parte dei PC portatili. Tutto quello che fai è fluido e fulmineo, dalle cose di tutti i giorni ai flussi di lavoro che richiedono un uso più intenso della grafica. E il processore grafico 8-core ti dà prestazioni al top e immagini ancora più realistiche nelle app e nei giochi dove la velocità è tutto.',
                'prezzo' => 1099, 'scontoPerc' => 5, 'sconto' => 0, 'image' => 'ipadpro11.jpg.jpg'],
            ['nome' => 'APPLE iPad Pro 2020 12.9', 'catId' => 9, 'marca' => 'APPLE', 'dimDisplay' => 12.9, 'risDisplay' => '2732x2048', 
                'processore' => 'Apple A12Z Bionic', 'ram' => 0, 'memoria' => 128, 'schedaGraf' => 'Proprietaria Apple',
                'fotocamera' => '12MP ƒ/1.8 + Ultra-grandangolare 10MP ƒ/2.4 + 2x zoom ottico + Frontale 7MP ƒ/2.2', 
                'descShort' => 'Dimensioni display: 12.9
                Risoluzione display: 2732x2048
                Processore: Apple A12Z Bionic
                Ram: /
                Memoria: 128
                Scheda grafica: Proprietaria Apple 
                Fotocamera: 12MP ƒ/1.8 + Ultra-grandangolare 10MP ƒ/2.4 + 2x zoom ottico + Frontale 7MP ƒ/2.2
                OS: iPad OS', 
                'descLong' => 'Tecnologia Liquid Retina:
                Il display Liquid Retina edge-to-edge non è solo bello e coinvolgente: è un incredibile concentrato di innovazioni.1 Come le tecnologie ProMotion e True Tone, che insieme alla migliore fedeltà cromatica del settore permettono immagini spettacolari e una risposta fulminea ai tuoi gesti. Semplicemente, è il display mobile più evoluto al mondo.
                Obiettivi professionali:
                Fotocamere evolute, grande display, prestazioni veloci e sensori di ultraprecisione: sono gli elementi che da sempre rendono ogni iPad estremamente versatile e capace. E adesso con iPad Pro puoi fare ancora di più. Il grandangolo e il nuovo ultra-grandangolo ti aiutano a comporre l’inquadratura perfetta quando scatti una foto o fai un video. E grazie ai microfoni di qualità professionale e all’audio a quattro altoparlanti, puoi perfino allestire un set multicamera per girare il tuo film.
                Scanner LiDAR:
                La tecnologia LiDAR (Light Detection and Ranging) serve a calcolare le distanze misurando il tempo che la luce impiega per raggiungere un oggetto e venire riflessa. È così fantascientifica che sarà utilizzata dalla NASA nella prossima missione su Marte. E ora è racchiusa in iPad Pro, grazie a un miracolo di ingegneria che ha permesso di miniaturizzarla adattandola a un dispositivo così sottile e leggero. Progettato ad hoc, questo scanner LiDAR si basa sul tempo di volo diretto (D-TOF) per misurare la luce riflessa da una distanza fino a 5 metri, sia in ambienti chiusi che all’aperto. Per farlo esegue una lettura a livello di fotone e a velocità nell’ordine dei nanosecondi, aprendo possibilità incredibili nel campo della realtà aumentata (AR) e non solo.
                Realtà aumentata:
                Sul nuovo iPad Pro, le app di AR danno risultati ancora più verosimili. Gli oggetti virtuali si inseriscono all’istante tra quelli fisici, e grazie a un sistema di occlusione migliorato riescono a passare davanti e dietro alle strutture del mondo reale. Anche la scansione dei movimenti e l’occlusione fra persone e oggetti virtuali sono più accurate che mai. E tutto questo permetterà a chi sviluppa le app di creare esperienze ancora più immersive.
                Fotocamera TrueDepth:
                La fotocamera frontale TrueDepth rende possibile il funzionamento di Face ID, la tecnologia di riconoscimento facciale più evoluta mai vista su un tablet (e su un computer). Ma ti permette anche di parlare con gli amici su FaceTime, di farti un selfie in modalità Ritratto, o di dare un tocco più personale alle conversazioni in Messaggi trasformandoti in un’Animoji.
                A12Z Bionic:
                Con il chip A12Z Bionic, iPad Pro surclassa la maggior parte dei PC portatili. Tutto quello che fai è fluido e fulmineo, dalle cose di tutti i giorni ai flussi di lavoro che richiedono un uso più intenso della grafica. E il processore grafico 8-core ti dà prestazioni al top e immagini ancora più realistiche nelle app e nei giochi dove la velocità è tutto.',
                'prezzo' => 1149, 'scontoPerc' => 4, 'sconto' => 0, 'image' => 'ipadpro12.9.jpg'],
            ['nome' => 'HUAWEI MediaPad M5', 'catId' => 10, 'marca' => 'HUAWEI', 'dimDisplay' => 10, 'risDisplay' => '1920x1200', 
                'processore' => 'Kirin 659', 'ram' => 3, 'memoria' => 32, 'schedaGraf' => 'ARM MALI T830 Mp2',
                'fotocamera' => '8MP', 
                'descShort' => 'Dimensioni display: 10
                Risoluzione display: 1920x1200
                Processore: Kirin 659
                Ram: 3 
                Memoria: 32
                Scheda grafica: ARM MALI T830 Mp2
                Fotocamera: 8MP
                OS: Android 8', 
                'descLong' => 'Alza il volume
                Ascolta la tua musica preferita con i quattro altoparlanti stereo Harman / Kardon che grazie al chip Smart PA seguono automaticamente l orientamento dello schermo, mantenendo sempre distinte le uscite audio Left e Right.
                Immergiti nel suono
                Grazie a HUAWEI Histen 5.0, HUAWEI mediapad M5 lite 10 ti regala un audio intenso che ti immerge totalmente nella scena, per un effetto sonoro 3D a più livelli.',
                'prezzo' => 299, 'scontoPerc' => 17, 'sconto' => 0, 'image' => 'mediapad.jpg'],
            ['nome' => 'SAMSUNG Galaxy Tab s5e', 'catId' => 10, 'marca' => 'SAMSUNG', 'dimDisplay' => 10.5, 'risDisplay' => '2560x1600', 
                'processore' => 'Qualcomm Snapdragon 670', 'ram' => 4, 'memoria' => 64, 'schedaGraf' => 'Adreno 615',
                'fotocamera' => '13MP ƒ/2.0  + Frontale 8MP ƒ/2.0', 
                'descShort' => 'Dimensioni display: 10.5
                Risoluzione display: 2560x1600
                Processore: Qualcomm Snapdragon 670
                Ram: 4
                Memoria: 64
                Scheda grafica: Adreno 615
                Fotocamera: 13MP ƒ/2.0  + Frontale 8MP ƒ/2.0
                OS: Android 9', 
                'descLong' => 'Molto più tablet, in molto meno spazio
                Più Tablet, meno cornice. Abbiamo creato un tablet più leggero e sottile, senza tralasciare tutti gli elementi fondamentali che un tablet deve avere. Scopri il paradosso di avere molto di più in molto meno spazio, nello straordinario Tab S5e
                Ultra-leggero, per chi è sempre in movimento
                Con i suoi 5,5 mm di spessore e solo 400g di peso, Galaxy Tab S5e è incredibilmente piacevole da tenere in mano. Rilassati e naviga tra i tuoi contenuti, oppure gestisci gli elettrodomestici* della tua casa connessa senza sforzo.
                Meraviglioso alla vista e al tatto
                Il corpo in metallo lucido regala una piacevole sensazione al tatto e la sofisticata finitura in metallo impreziosisce il design ricercato di Tab S5e. Disponibili tre diverse opzioni colore per incontrare il tuo sitle: silver, black e gold.
                Armonia degli spazi
                Grazie alla nuova One UI, le funzioni principali sono state ottimizzare per riempire gli ampi spazi dello schermo, per una visualizzazione più armoniosa ed un esperienza tablet più piacevole
                Non crederai ai tuoi occhi 
                Esalta i tuoi contenuti, grazie al display sAMOLED da 10.5" di Tab S5e, in grado di riprodurre colori perfetti ed una profontià d immagine straordinaria. Così potrai immergerti totalmente nei tuoi film preferiti o nelle serie TV di Netflix
                Un suono così nitido da sembrare reale
                I quattro altoparlanti AKG di Galaxy Tab S5e, ti consentono di ascoltare la tua musica preferita su Spotify con un suono ricco, incredibilmente realistico. E con l’audio surround tridimensionale di Dolby Atmos, ti immergerai completamente nei contenuti visualizzati sul tuo schermo.
                Un Tablet ai tuoi comandi
                Galaxy Tab S5e comprende il tuo bisogno di essere costantemente in movimento. È per questo che è dotato della funzione integrata Bixby Voice. Ora ti basta dare un semplice comando e ci penserà Bixby a riprodurre la tua playlist musicale del giorno o a controllare gli elettrodomestici* della tua casa connessa mentre sei via.
                Più energia per quando ne hai realmente bisogno
                Rivedi i tuoi momenti più belli, tutte le volte che vuoi. Galaxy Tab S5e è dotato di una batteria a Ricarica Rapida da 7.040 mAh. Questo significa che puoi goderti fino a 15 ore di visualizzazione senza doverti preoccupare di rimanere a corto di batteria.
                Massima sicurezza
                Galaxy Tab S5e è dotato di lettore di impronte digitali, posto sul tasto di accensione laterale e della funzione di riconoscimento facciale, per proteggere i tuoi dati da sgradite intrusioni esterne.',
                'prezzo' => 419, 'scontoPerc' => 7, 'sconto' => 0, 'image' => 'tabs5e.jpg'],
            ['nome' => 'SAMSUNG Galaxy Tab s6', 'catId' => 10, 'marca' => 'SAMSUNG', 'dimDisplay' => 10.5, 'risDisplay' => '2560x1600', 
                'processore' => 'Qualcomm Snapdragon 8150', 'ram' => 8, 'memoria' => 256, 'schedaGraf' => 'Adreno 640',
                'fotocamera' => '13MP ƒ/2.0  + 5MP ƒ/2.2 + Frontale 8MP ƒ/2.0', 
                'descShort' => 'Dimensioni display: 10.5
                Risoluzione display: 2560x1600
                Processore: Qualcomm Snapdragon 8150
                Ram: 8 
                Memoria: 256
                Scheda grafica: Adreno 640
                Fotocamera: 13MP ƒ/2.0  + 5MP ƒ/2.2 + Frontale 8MP ƒ/2.0
                OS: Android 9', 
                'descLong' => 'Creatività senza limiti
                Porta la tua creatività ad un livello mai visto con Tab S6. Un tablet unico e versatile che abbatte ogni limite grazie al rivoluzionario livello di integrazione con la S Pen, sia in ambito lavorativo che per puro divertimento. Esprimi al massimo il tuo potenziale e trasforma le sfide in opportunità: con Galaxy Tab S6, affronterai sempre la tua vita al meglio.
                Impossibile da dimenticare
                Ora la S Pen non ti abbandona mai. Grazie ad un piccolo incavo sul retro, la S Pen si fissa magneticamente a Galaxy Tab S6 ed è sempre pronta, così non rischi di dimenticare un’idea brillante mentre cerchi la penna. In più, la S Pen inizia automaticamente a caricarsi appena si aggancia al tablet.
                Una vera esperienza PC
                Un’esperienza PC desktop in un sottilissimo tablet, grazie alla Samsung DeX. E con la BookCover Keyboard* di Galaxy Tab S6 hai a disposizione tasti rapidi dedicati e un comodo touchpad. Se poi ti serve ancora più spazio, devi solo collegarti ad un altro display con un semplice cavo HDMI. Tutto per offrirti uno strumento di lavoro ancora più completo.
                Moltiplica le tue possibilità
                Per sfruttare al meglio le app con visualizzazione a schermo diviso, puoi contare sulla funzione Multischermo di Galaxy Tab S6. Basta un clic e app come Galleria, E-mail e Samsung Notes si spartiranno lo schermo: scegli le dimensioni di ciascuna finestra e lavora come preferisci.
                Foto e video da professionista
                Ecco il primo Galaxy Tab con doppia fotocamera posteriore, da 13 MP e 5 MP. L’obiettivo ultra-grandangolare e l’intelligenza artificiale smart ti regalano foto e video impeccabili, mentre con "Adobe Premiere Rush for Samsung" potrai creare video professionali.
                Tutto lo spazio per ciò che ti sta a cuore
                Tutto lo spazio che vuoi, in un tablet sottilissimo. Le linee compatte di Galaxy Tab S6 racchiudono una memoria di 6GB o 8GB, abbinata rispettivamente a 128GB o 256GB di spazio di archiviazione. E se vuoi la certezza di avere tutti i tuoi contenuti in un unico dispositivo, sfrutta lo slot per la scheda SD per aggiungere fino a 1 terabyte di memoria.
                Al tuo fianco per tutto il giorno
                Hai dimenticato il caricabatterie? Nessun problema: la potente batteria da 7.040 mAh di Galaxy Tab S6 resiste fino a 15 ore di riproduzione video, per un’intera giornata di libertà. Quando serve, puoi contare sulla Ricarica Rapida tramite USB Tipo C e sul dock di ricarica POGO.
                Un tuo tocco sullo schermo, ed è subito pronto
                Lo schermo di Galaxy Tab S6 nasconde un lettore ottico di impronte digitali, per il massimo della sicurezza. Il tablet si sblocca con un semplice tocco del tuo dito, devi solo sfiorare lo schermo senza doverti ricordare alcuna password.',
                'prezzo' => 909, 'scontoPerc' => 3, 'sconto' => 0, 'image' => 'tabs6.jpg'],

        ]);

        DB::table('users')->insert([
            ['nome' => 'Mario', 'cognome' => 'Rossi', 'email' => 'mario@rossi.it', 
                'residenza' => '', 'occupazione' => '',
                'username' => 'MarioRossi90', 'password' => Hash::make('MarioRossi90'), 
                'ruolo' => 'admin','created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'Giuseppe', 'cognome' => 'Verdi', 'email' => 'giuseppe@verdi.it', 
                'residenza' => 'Ancona', 'occupazione' => '',
                'username' => 'GiuseppeVerdi80', 'password' => Hash::make('GiuseppeVerdi80'), 
                'ruolo' => 'staff','created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'Giovanni', 'cognome' => 'Badiali', 'email' => 'giovanni@badiali.it', 
                'residenza' => 'Pesaro', 'occupazione' => 'ingegnerere',
                'username' => 'GiovanniBadiali92', 'password' => Hash::make('GiovanniBadiali92'), 
                'ruolo' => 'user','created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['nome' => 'Samuele', 'cognome' => 'Gasparroni', 'email' => 'samuele@gasparroni.it', 
                'residenza' => 'Urbino', 'occupazione' => 'operaio',
                'username' => 'SamueleGasparroni65', 'password' => Hash::make('SamueleGasparroni65'), 
                'ruolo' => 'user','created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ]);
    }
}
