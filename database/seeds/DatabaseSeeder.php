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
        $this->call(UserTableSeeder::class);
        $this->call(ExerciseTableSeeder::class);
        $this->call(ExerciseTypeTableSeeder::class);
        $this->call(MuscleGroupsTableSeeder::class);
        $this->call(ContactMessageTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(WorkoutPlanTableSeeder::class);
    }
}

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $exercise = new \App\Exercise();
      $exercise->name_en = "Deadlift";
      $exercise->name_hu = "Felhúzás";
      $exercise->description_en = "Approach the bar so that it is centered over your feet. Your feet should be about hip-width apart. Bend at the hip to grip the bar at shoulder-width allowing your shoulder blades to protract. Typically, you would use an alternating grip.
With your feet and your grip set, take a big breath and then lower your hips and flex the knees until your shins contact the bar. Look forward with your head. Keep your chest up and your back arched, and begin driving through the heels to move the weight upward.
After the bar passes the knees aggressively pull the bar back, pulling your shoulder blades together as you drive your hips forward into the bar.
Lower the bar by bending at the hips and guiding it to the floor.";
      $exercise->description_hu = "Vedd fel a súlyt a padlóról, a hátadat végig egyenesen tartva. Nagyon fontos, hogy a hát semmiképpen nem szabad, hogy domború legyen, ez egyenes út a porckorongsérvhez! Végig tartsd egyenesen, vagy kissé homorúan a hátadat, és egy pillanatra se felejtsd el ezt a pozíciót megtartani. A rudat a testedhez közel tartva emeld fel, ameddig a rúd a combodat nem érinti. Ez után lassan engedd vissza a kiinduló pozícióba. Ismételd a gyakorlatot az előírt ismétlésszámmal.";
      $exercise->musclegroup_id = "1";
      $exercise->exercisetype_id = "1";
      $exercise->video = "https://www.youtube.com/embed/4AObAU-EcYE";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Barbell Row";
      $exercise->name_hu = "Döntött törzsű evezés";
      $exercise->description_en = "Holding a barbell with a pronated grip (palms facing down), bend your knees slightly and bring your torso forward, by bending at the waist, while keeping the back straight until it is almost parallel to the floor. Tip: Make sure that you keep the head up. The barbell should hang directly in front of you as your arms hang perpendicular to the floor and your torso. This is your starting position.
Now, while keeping the torso stationary, breathe out and lift the barbell to you. Keep the elbows close to the body and only use the forearms to hold the weight. At the top contracted position, squeeze the back muscles and hold for a brief pause.
Then inhale and slowly lower the barbell back to the starting position.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Húzd fel a rudat a hasad/mellkasod irányába oly módon, hogy a könyöködre koncentrálsz a mozdulat egész ideje alatt. Ez fog segíteni abban, hogy kikapcsold a mozgásból a bicepszedet amennyire lehet. Amikor a rúd megérintette a törzsedet, lassan engedd vissza a kiinduló pozícióba. Semmiképpen se segíts e a törzseddel a mozgásba - ez a hatékonyságot is csökkenti, ellenben a sérülésveszélyt jelentősen megnöveli. inkább csökkentsd a súlyt, ha másképp nem megy.";
      $exercise->musclegroup_id = "1";
      $exercise->exercisetype_id = "1";
      $exercise->video = "https://www.youtube.com/embed/G8l_8chR5BE";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Cable Row";
      $exercise->name_hu = "Kábeles evezés";
      $exercise->description_en = "For this exercise you will need access to a low pulley row machine with a V-bar. Note: The V-bar will enable you to have a neutral grip where the palms of your hands face each other. To get into the starting position, first sit down on the machine and place your feet on the front platform or crossbar provided making sure that your knees are slightly bent and not locked.
Lean over as you keep the natural alignment of your back and grab the V-bar handles.
With your arms extended pull back until your torso is at a 90-degree angle from your legs. Your back should be slightly arched and your chest should be sticking out. You should be feeling a nice stretch on your lats as you hold the bar in front of you. This is the starting position of the exercise.
Keeping the torso stationary, pull the handles back towards your torso while keeping the arms close to it until you touch the abdominals. Breathe out as you perform that movement. At that point you should be squeezing your back muscles hard. Hold that contraction for a second and slowly go back to the original position while breathing in.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "A gyakorlat végezhető egykezes változatban is, így maximálisan rá tudunk koncentrálni a célizomra, és nem mellékesen, még hátrébb tudjuk húzni a fogantyút, ami még erőteljesebb izom összehúzódást eredményez. A kábeles evezés szűken az erre alkalmas fogantyúval végezve főleg a hátizom alsó részeit terheli, azonban a fogás szélességével tetszőlegesen dolgoztathatjuk meg az edzeni kívánt részeket.";
      $exercise->musclegroup_id = "1";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/GZbfZ033f74";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "EZ-Bar Curl";
      $exercise->name_hu = "Bicepsz Francia Rúddal";
      $exercise->description_en = "Stand up with your torso upright while holding an E-Z Curl Bar at the closer inner handle. The palm of your hands should be facing forward and they should be slightly tilted inwards due to the shape of the bar. The elbows should be close to the torso. This will be your starting position.
While holding the upper arms stationary, curl the weights forward while contracting the biceps as you breathe out. Tip: Only the forearms should move.
Continue the movement until your biceps are fully contracted and the bar is at shoulder level. Hold the contracted position for a second and squeeze the biceps hard.
Slowly begin to bring the bar back to starting position as your breathe in.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Félkörívben emeld fel a rudat a karjaid behajlításával addig, míg a bicepszed el nem éri a csúcsösszehúzódás pontját. Figyelj rá hogy olyan pozícióban fejezd be a mozgást, amikor a bicepsz még dolgozik - ha túl magasra emeled a súlyt, azzal tehermentesítheted a célizmot. A könyöködet tartsd a testedhez minél közelebb, és lehetőleg mozdulatlanul.";
      $exercise->musclegroup_id = "2";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/zG2xJ0Q5QtI";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Hammer Curl";
      $exercise->name_hu = "Kalapács-bicepsz";
      $exercise->description_en = "Stand up with your torso upright and a dumbbell in each hand being held at arms length. The elbows should be close to the torso.
The palms of the hands should be facing your torso. This will be your starting position.
While holding the upper arm stationary, curl the right weight forward while contracting the biceps as you breathe out. Continue the movement until your biceps is fully contracted and the dumbbells are at shoulder level. Hold the contracted position for a second as you squeeze the biceps. Tip: Only the forearms should move.
Slowly begin to bring the dumbbells back to starting position as your breathe in.
Repeat the movement with the left hand. This equals one repetition.
Continue alternating in this manner for the recommended amount of repetitions.";
      $exercise->description_hu = "Ha lehet, könyöködet egy helyben tartva, lassan és egyenletesen emeld az egyik súlyzót a válladhoz. Ereszd vissza, és a másik karral is ismételd a mozdulatot. Ügyelj rá, hogy a könyököd ne mozogjon ki oldalra. Végezheted egyszerre a két karoddal is a gyakorlatot.";
      $exercise->musclegroup_id = "2";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/zC3nLlEvin4";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Barbell Bench Press";
      $exercise->name_hu = "Fekvenyomás";
      $exercise->description_en = "Lie back on a flat bench. Using a medium width grip (a grip that creates a 90-degree angle in the middle of the movement between the forearms and the upper arms), lift the bar from the rack and hold it straight over you with your arms locked. This will be your starting position.
From the starting position, breathe in and begin coming down slowly until the bar touches your middle chest.
After a brief pause, push the bar back to the starting position as you breathe out. Focus on pushing the bar using your chest muscles. Lock your arms and squeeze your chest in the contracted position at the top of the motion, hold for a second and then start coming down slowly again. Tip: Ideally, lowering the weight should take about twice as long as raising it.
Repeat the movement for the prescribed amount of repetitions.
When you are done, place the bar back in the rack.";
      $exercise->description_hu = "Biztosítva, hogy felkar a törzstől oldalirányban kifelé mozogjon, lassan hajlítsd be karodat és ereszd lefelé a rudat, míg az meg nem érinti a mellkasod közepét, a mellbimbók vonalában. Nyomd vissza a kiinduló helyzetbe, és ismételd a mozgást az edzéstervedben meghatározott ismétlésszám szerint.";
      $exercise->musclegroup_id = "3";
      $exercise->exercisetype_id = "1";
      $exercise->video = "https://www.youtube.com/embed/4T9UQ4FBVXI";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Cable Crossover";
      $exercise->name_hu = "Csigás keresztezés";
      $exercise->description_en = "To get yourself into the starting position, place the pulleys on a high position (above your head), select the resistance to be used and hold the pulleys in each hand.
Step forward in front of an imaginary straight line between both pulleys while pulling your arms together in front of you. Your torso should have a small forward bend from the waist. This will be your starting position.
With a slight bend on your elbows in order to prevent stress at the biceps tendon, extend your arms to the side (straight out at both sides) in a wide arc until you feel a stretch on your chest. Breathe in as you perform this portion of the movement. Tip: Keep in mind that throughout the movement, the arms and torso should remain stationary; the movement should only occur at the shoulder joint.
Return your arms back to the starting position as you breathe out. Make sure to use the same arc of motion used to lower the weights.
Hold for a second at the starting position and repeat the movement for the prescribed amount of repetitions.";
      $exercise->description_hu = "Húzd le a karjaidat a melled vagy a csípőd elé, majd kontrolláltan engedd vissza őket, a mellizom teljes megnyúlásáig. Próbáld meg az izommunkát egész idő alatt a mellizomzatra koncentrálni. Amikot összehúztad a két fogantyút, tudatosan feszíts rá a mellizmokra.";
      $exercise->musclegroup_id = "3";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/Iwe6AmxVf7o";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Overhead Press";
      $exercise->name_hu = "Mellről nyomás állva";
      $exercise->description_en = "Start by placing a barbell that is about chest high on a squat rack. Once you have selected the weights, grab the barbell using a pronated (palms facing forward) grip. Make sure to grip the bar wider than shoulder width apart from each other.
Slightly bend the knees and place the barbell on your collar bone. Lift the barbell up keeping it lying on your chest. Take a step back and position your feet shoulder width apart from each other.
Once you pick up the barbell with the correct grip length, lift the bar up over your head by locking your arms. Hold at about shoulder level and slightly in front of your head. This is your starting position.
Lower the bar down to the collarbone slowly as you inhale.
Lift the bar back up to the starting position as you exhale.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Nyomd egyenesen fel a súlyzót az arcod előtt, egészen addig, míg a karod kiegyenesedik, és a súlyzó közvetlenül a fejed fölött van. Lassan engedd vissza a kiinduló helyzetbe a súlyzót, és ismételd meg a mozgást az előírt ismétlésszámmal.";
      $exercise->musclegroup_id = "4";
      $exercise->exercisetype_id = "1";
      $exercise->video = "https://www.youtube.com/embed/CnBmiBqp-AI";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Lateral Raise";
      $exercise->name_hu = "Oldalemelés";
      $exercise->description_en = "Pick a couple of dumbbells and stand with a straight torso and the dumbbells by your side at arms length with the palms of the hand facing you. This will be your starting position.
While maintaining the torso in a stationary position (no swinging), lift the dumbbells to your side with a slight bend on the elbow and the hands slightly tilted forward as if pouring water in a glass. Continue to go up until you arms are parallel to the floor. Exhale as you execute this movement and pause for a second at the top.
Lower the dumbbells back down slowly to the starting position as you inhale.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Ügyelj a kisujjadra! Mit jelent ez? A kisujjad a felső ponton legyen magasabban, mint a hüvelykujjad, mintha egy kannából akarnál vizet önteni. Ezzel az apró kis mozdulattal még több stimulációt tudsz az oldalsó deltaizmokra helyezni.

Ezt a gyakorlatot többféle módon lehet végezni. Álló vagy pad szélén ülő helyzetben egyaránt hatásosan végezhető, a cél az oldalsó deltaizmok megterhelése. Ha már nagyon erőlködsz, próbálj meg előrehajolni, 'bedőlni' a gyakorlatba, és nem hátrahajolni (mert úgy az amúgy is erős elülső deltaizmokat terheled). De ez nem azt jelenti, hogy előre-hátra kell ingáznod, ezzel elvész a gyakorlat lényege! A gyakorlatot végezheted váltott karral is, ha csak egyetlen súlyzó áll rendelkezésedre.";
      $exercise->musclegroup_id = "4";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/3VcKaXpzqRo";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Barbell Squat";
      $exercise->name_hu = "Guggolás";
      $exercise->description_en = "Begin with the barbell supported on top of the traps. The chest should be up and the head facing forward. Adopt a hip-width stance with the feet turned out as needed.
Descend by flexing the knees, refraining from moving the hips back as much as possible. This requires that the knees travel forward. Ensure that they stay align with the feet. The goal is to keep the torso as upright as possible.
Continue all the way down, keeping the weight on the front of the heel. At the moment the upper legs contact the lower legs reverse the motion, driving the weight upward.";
      $exercise->description_hu = "Ha nem elég rugalmas a bokád, akkor nagyon nehéznek fogod találni a guggolás közbeni egyensúlyozást. Fokozni tudja az egyensúlyozás biztonságát, ha a sarkaddal egy 5x10 cm-es deszkára állsz.**

A guggolás edzésterv összeállítása során mindig tartsd szem előtt, hogy az egyik legmegterhelőbb gyakorlatról beszélünk. Tehát ne akarj más, hasonlóan megterhelő mozgásformát, vagy edzéstervet végezni egyazon edzésen, mint amikor guggolsz.

** - egyes szakértők szerint a sarokalátéttel guggolás káros, mások szerint viszont genetika kérdése, hogy valakinek elég rugalmasak-e a bokaszalagjai a telitalpas guggoláshoz vagy sem. Mindenesetre az igazi, széles terpeszes, mély guggolást NEM célszerű sarokalátéttel végezni, inkább időt kell áldozni rá, és fokozatos nyújtással hozzászoktatni még kis súlyok használata közben a bokaszalagokat a telitalpas guggoláshoz.";
      $exercise->musclegroup_id = "5";
      $exercise->exercisetype_id = "1";
      $exercise->video = "https://www.youtube.com/embed/QhVC_AnZYYM";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Lateral Raise";
      $exercise->name_hu = "Álló vádligép";
      $exercise->description_en = "Adjust the padded lever of the calf raise machine to fit your height.
Place your shoulders under the pads provided and position your toes facing forward (or using any of the two other positions described at the beginning of the chapter). The balls of your feet should be secured on top of the calf block with the heels extending off it. Push the lever up by extending your hips and knees until your torso is standing erect. The knees should be kept with a slight bend; never locked. Toes should be facing forward, outwards or inwards as described at the beginning of the chapter. This will be your starting position.
Raise your heels as you breathe out by extending your ankles as high as possible and flexing your calf. Ensure that the knee is kept stationary at all times. There should be no bending at any time. Hold the contracted position by a second before you start to go back down.
Go back slowly to the starting position as you breathe in by lowering your heels as you bend the ankles until calves are stretched.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Fontos, hogy a használt vádligép nagy súlyokkal legyen terhelhető. A gép legyen alkalmas nagy mennyiségű súly felrakására, vagy legyen emelős jellegű, amellyel viszonylag kis súlyok is nagy terhelést képesek előidézni. Ebből a gyakorlatból is mindig legalább 20 ismétlést végezz. Még koncentráltabb terhelést érhetsz el, ha a gyakorlatot váltott lábbal végzed.";
      $exercise->musclegroup_id = "5";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/YMmgqO8Jo-k";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Standing Calf Raises";
      $exercise->name_hu = "Álló vádligép";
      $exercise->description_en = "Adjust the padded lever of the calf raise machine to fit your height.
Place your shoulders under the pads provided and position your toes facing forward (or using any of the two other positions described at the beginning of the chapter). The balls of your feet should be secured on top of the calf block with the heels extending off it. Push the lever up by extending your hips and knees until your torso is standing erect. The knees should be kept with a slight bend; never locked. Toes should be facing forward, outwards or inwards as described at the beginning of the chapter. This will be your starting position.
Raise your heels as you breathe out by extending your ankles as high as possible and flexing your calf. Ensure that the knee is kept stationary at all times. There should be no bending at any time. Hold the contracted position by a second before you start to go back down.
Go back slowly to the starting position as you breathe in by lowering your heels as you bend the ankles until calves are stretched.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Fontos, hogy a használt vádligép nagy súlyokkal legyen terhelhető. A gép legyen alkalmas nagy mennyiségű súly felrakására, vagy legyen emelős jellegű, amellyel viszonylag kis súlyok is nagy terhelést képesek előidézni. Ebből a gyakorlatból is mindig legalább 20 ismétlést végezz. Még koncentráltabb terhelést érhetsz el, ha a gyakorlatot váltott lábbal végzed.";
      $exercise->musclegroup_id = "5";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/YMmgqO8Jo-k";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Close-Grip Barbell Bench Press";
      $exercise->name_hu = "Szűknyomás";
      $exercise->description_en = "Lie back on a flat bench. Using a close grip (around shoulder width), lift the bar from the rack and hold it straight over you with your arms locked. This will be your starting position.
As you breathe in, come down slowly until you feel the bar on your middle chest. Tip: Make sure that - as opposed to a regular bench press - you keep the elbows close to the torso at all times in order to maximize triceps involvement.
After a second pause, bring the bar back to the starting position as you breathe out and push the bar using your triceps muscles. Lock your arms in the contracted position, hold for a second and then start coming down slowly again. Tip: It should take at least twice as long to go down than to come up.
Repeat the movement for the prescribed amount of repetitions.
When you are done, place the bar back in the rack.";
      $exercise->description_hu = "Minél szélesebb fogást alkalmazol, annál nagyobb igénybevétel tevődik át a belső mellizmokról a külső mellizmokra. Vigyázz, hogy a vállaidat ne told előre a nyomás közben, mert akkor aránytalanul nagy terhelésnek teszed ki a vállizmokat, ami hosszabb távon sérülésveszélyes lehet. Emellett a könyöködet ne akasszad ki a felső ponton, mert az meg a könyökízületet terheli le túlságosan.";
      $exercise->musclegroup_id = "6";
      $exercise->exercisetype_id = "1";
      $exercise->video = "https://www.youtube.com/embed/nEF0bv2FW94";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Rope Triceps Pushdown";
      $exercise->name_hu = "Csigás letolás tricepsz kötéllel";
      $exercise->description_en = "Attach a rope attachment to a high pulley and grab with a neutral grip (palms facing each other).
Standing upright with the torso straight and a very small inclination forward, bring the upper arms close to your body and perpendicular to the floor. The forearms should be pointing up towards the pulley as they hold the rope with the palms facing each other. This is your starting position.
Using the triceps, bring the rope down as you bring each side of the rope to the side of your thighs. At the end of the movement the arms are fully extended and perpendicular to the floor. The upper arms should always remain stationary next to your torso and only the forearms should move. Exhale as you perform this movement.
After holding for a second, at the contracted position, bring the rope slowly up to the starting point. Breathe in as you perform this step.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "A gyakorlatot kétféle módon végezheted: vagy a tested mellé húzod le a kötél két végét, vagy pedig az egész gyakorlatot a tested előtt végzed, kifelé megfeszítve a kötél végeit. Mindkét variáció másféle érzetet kelt a tricepszedben, érdemes variálni őket! Nem kifejezetten sérülésveszélyes gyakorlat, ám ha rángatjuk a súlyt, és/vagy túl nagy terheléssel dolgozunk, akkor minden bizonnyal képesek lehetünk ezzel az egyébként teljesen biztonságos gyakorlattal is lesérülni :)";
      $exercise->musclegroup_id = "6";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/vB5OHsJ3EME";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Crunches";
      $exercise->name_hu = "Hasprés";
      $exercise->description_en = "Lie flat on your back with your feet flat on the ground, or resting on a bench with your knees bent at a 90 degree angle. If you are resting your feet on a bench, place them three to four inches apart and point your toes inward so they touch.
Now place your hands lightly on either side of your head keeping your elbows in. Tip: Don't lock your fingers behind your head.
While pushing the small of your back down in the floor to better isolate your abdominal muscles, begin to roll your shoulders off the floor.
Continue to push down as hard as you can with your lower back as you contract your abdominals and exhale. Your shoulders should come up off the floor only about four inches, and your lower back should remain on the floor. At the top of the movement, contract your abdominals hard and keep the contraction for a second. Tip: Focus on slow, controlled movement - don't cheat yourself by using momentum.
After the one second contraction, begin to come down slowly again to the starting position as you inhale.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Lassan hajlítsd vállát a térded felé, annyira, hogy lapockáid 3-5 cm-re eltávolodjanak a padlótól. Tarts ki így egy másodpercig, majd ereszkedj vissza a kiinduló helyzetbe és ismételj.";
      $exercise->musclegroup_id = "7";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/NGRKFMKhF8s";
      $exercise->save();

      $exercise = new \App\Exercise();
      $exercise->name_en = "Reverse Curl";
      $exercise->name_hu = "Fordított fogású bicepsz-gyakorlat";
      $exercise->description_en = "Stand up with your torso upright while holding a bar attachment that is attached to a low pulley using a pronated (palms down) and shoulder width grip. Make sure also that you keep the elbows close to the torso. This will be your starting position.
While holding the upper arms stationary, curl the weights while contracting the biceps as you breathe out. Only the forearms should move. Continue the movement until your biceps are fully contracted and the bar is at shoulder level. Hold the contracted position for a second as you squeeze the muscle.
Slowly begin to bring the bar back to starting position as your breathe in.
Repeat for the recommended amount of repetitions.";
      $exercise->description_hu = "Ha lehet, könyöködet egy helyben tartva, lassan és egyenletesen emeld a súlyzót válladhoz. Ereszd vissza, és ismételd a mozdulatot.";
      $exercise->musclegroup_id = "8";
      $exercise->exercisetype_id = "2";
      $exercise->video = "https://www.youtube.com/embed/didEQUuieRQ";
      $exercise->save();
    }
}

class ExerciseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exerciseType = new \App\ExerciseType();
        $exerciseType->name_en = "Compound";
        $exerciseType->name_hu = "Összetett";
        $exerciseType->save();

        $exerciseType = new \App\ExerciseType();
        $exerciseType->name_en = "Isolation";
        $exerciseType->name_hu = "Izolált";
        $exerciseType->save();
    }
}

class MuscleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Back";
      $muscleGroup->name_hu = "Hát";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Biceps";
      $muscleGroup->name_hu = "Bicepsz";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Chest";
      $muscleGroup->name_hu = "Mell";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Shoulders";
      $muscleGroup->name_hu = "Váll";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Legs";
      $muscleGroup->name_hu = "Láb";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Triceps";
      $muscleGroup->name_hu = "Tricepsz";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Abs";
      $muscleGroup->name_hu = "Has";
      $muscleGroup->save();

      $muscleGroup = new \App\MuscleGroup();
      $muscleGroup->name_en = "Forearm";
      $muscleGroup->name_hu = "Alkar";
      $muscleGroup->save();
    }
}

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "admin";
        $user->email = "admin@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "1";
        $user->save();

        $user = new \App\User();
        $user->name = "user1";
        $user->email = "user1@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user2";
        $user->email = "user2@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user3";
        $user->email = "user3@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user4";
        $user->email = "user4@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user5";
        $user->email = "user5@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user6";
        $user->email = "user6@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user7";
        $user->email = "user7@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user8";
        $user->email = "user8@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user9";
        $user->email = "user9@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user10";
        $user->email = "user10@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user11";
        $user->email = "user11@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user12";
        $user->email = "user12@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user13";
        $user->email = "user13@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user14";
        $user->email = "user14@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();
    }
}

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new \App\Article();
        $article->title_hu = "Article1_hu";
        $article->title_en = "Article1_en";
        $article->body_hu = "texttexttexttexttexttexttexttexttexttexttext_hu";
        $article->body_en = "texttexttexttexttexttexttexttexttexttexttext_en";
        $article->save();

        $article = new \App\Article();
        $article->title_hu = "Article2_hu";
        $article->title_en = "Article2_en";
        $article->body_hu = "texttexttexttexttexttexttexttexttexttexttext_hu";
        $article->body_en = "texttexttexttexttexttexttexttexttexttexttext_en";
        $article->save();

        $article = new \App\Article();
        $article->title_hu = "Article3_hu";
        $article->title_en = "Article3_en";
        $article->body_hu = "texttexttexttexttexttexttexttexttexttexttext_hu";
        $article->body_en = "texttexttexttexttexttexttexttexttexttexttext_en";
        $article->save();
    }
}

class ContactMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactMessage = new \App\ContactMessage();
        $contactMessage->sender = "ContactMessage1";
        $contactMessage->email = "asd@asd.com";
        $contactMessage->subject = "ContactMessage1";
        $contactMessage->body = "texttexttexttexttexttexttexttexttexttexttext";
        $contactMessage->save();

        $contactMessage = new \App\ContactMessage();
        $contactMessage->sender = "ContactMessage2";
        $contactMessage->email = "asd@asd.com";
        $contactMessage->subject = "ContactMessage2";
        $contactMessage->body = "asdsadsadtexttexttexttexttexttexttexttexttexttexttext";
        $contactMessage->save();

        $contactMessage = new \App\ContactMessage();
        $contactMessage->sender = "ContactMessage3";
        $contactMessage->email = "asd@asd.com";
        $contactMessage->subject = "ContactMessage3";
        $contactMessage->body = "texttexttexttexttexttsadsadsadsadexttexttexttexttexttextsad";
        $contactMessage->save();
    }
}

class WorkoutPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'Starting Strength';
        $workoutPlan->num_of_days = 3;
        $workoutPlan->type = 'Strength';
        $workoutPlan->difficulty = 'Beginner';
        $workoutPlan->link = 'http://startingstrength.com/get-started/programs';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'Strong Lifts 5x5';
        $workoutPlan->num_of_days = 3;
        $workoutPlan->type = 'Strength';
        $workoutPlan->difficulty = 'Beginner';
        $workoutPlan->link = 'https://stronglifts.com/5x5/';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = '5-3-1';
        $workoutPlan->num_of_days = 4;
        $workoutPlan->type = 'Strength';
        $workoutPlan->difficulty = 'Advanced';
        $workoutPlan->link = 'https://www.t-nation.com/workouts/531-how-to-build-pure-strength';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'PHAT';
        $workoutPlan->num_of_days = 5;
        $workoutPlan->type = 'Hypertrophy';
        $workoutPlan->difficulty = 'Advanced';
        $workoutPlan->link = 'http://www.simplyshredded.com/mega-feature-layne-norton-training-series-full-powerhypertrophy-routine-updated-2011.html';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'PPL';
        $workoutPlan->num_of_days = 6;
        $workoutPlan->type = 'Hypertrophy';
        $workoutPlan->difficulty = 'Beginner';
        $workoutPlan->link = 'https://www.reddit.com/r/Fitness/comments/37ylk5/a_linear_progression_based_ppl_program_for/';
        $workoutPlan->save();
    }
}
