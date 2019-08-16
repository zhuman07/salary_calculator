<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="salary-calc">
    <form action="">
        <div class="field-block">
            <label for="org">Вид организации образования</label>
            <select name="org" id="org">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['ORGS'] as $org_item_key => $org_item_value): ?>
                    <?php foreach ($org_item_value['child'] as $org_item_child_key => $org_item_child_value): ?>
                        <?php if(isset($org_item_child_value['child'])): ?>
                            <?php foreach ($org_item_child_value['child'] as $org_item_child_child_key => $org_item_child_child_val): ?>
                            <option value="<?php echo $org_item_child_child_key ?>"><?php echo $org_item_child_child_val['title'] ?></option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <option value="<?php echo $org_item_child_key ?>"><?php echo $org_item_child_value['title'] ?></option>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="position">Должность</label>
            <select name="position" id="position">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['POSITIONS'] as $pos_item_key => $pos_item_value): ?>
                    <?php if(isset($pos_item_value['child'])): ?>
                        <?php foreach ($pos_item_value['child'] as $pos_child_item_key => $pos_child_item_val): ?>
                            <?php if(isset($pos_child_item_val['child'])): ?>
                                <?php foreach ($pos_child_item_val['child'] as $pos_child_child_item_key => $pos_child_child_item_val): ?>
                                    <option value="<?php echo $pos_child_child_item_key ?>"><?php echo $pos_child_child_item_val['title'] ?></option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <option value="<?php echo $pos_child_item_key ?>"><?php echo $pos_child_item_val['title'] ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <option value="<?php echo $pos_item_key ?>"><?php echo $pos_item_value['title'] ?></option>
                    <?php endif ?>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field-block exp_years_type_1">
            <label for="work_exp">Стаж работы по специальности (согласно протоколу работодателя)</label>
            <select name="work_exp" id="work_exp" disabled>
                <option value="">Выбрать</option>
                <?php foreach ($arResult['WORK_EXP'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field-block exp_years_type_2">
            <label for="work_exp">Стаж работы по специальности (согласно протоколу работодателя)</label>
            <select name="work_exp" id="work_exp" disabled>
                <option value="">Выбрать</option>
                <?php foreach ($arResult['WORK_EXP_2'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field-block">
            <label for="ed_level">Уровень образования</label>
            <select name="ed_level" id="ed_level">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['ED_LEVELS'] as $level_key => $level_val): ?>
                    <option value="<?php echo $level_key ?>"><?php echo $level_val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="doc_degree">Наличие ученой степень</label>
            <select name="doc_degree" id="doc_degree">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['DOC_DEGREES'] as $degree_key => $degree_val): ?>
                    <option value="<?php echo $degree_key ?>"><?php echo $degree_val ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field-block">
            <label for="workload_hours">Количество часов нагрузки в неделю (согласно тарификации)</label>
            <input type="number" name="workload_hours" id="workload_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="qualif_level">Квалификационный уровень</label>
            <select name="qualif_level" id="qualif_level">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['QUALIF_LEVELS'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="qualif_teach_master">Наличие квалификации педагогического мастерства</label>
            <select name="qualif_teach_master" id="qualif_teach_master">
                <option value="">Выбрать</option>
            </select>
        </div>
        <div class="field-block">
            <label for="class_qualif">Классная квалификация</label>
            <select name="class_qualif" id="class_qualif">
                <option value="">Выбрать</option>
            </select>
        </div>
        <div class="field-block">
            <label for="honor_title">Почетное звание</label>
            <select name="honor_title" id="honor_title">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['HONOR_TITLES'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="senior_status">Статус "Старший"</label>
            <select name="senior_status" id="senior_status">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="special_work_condition">Особые условия труда гражданских служащих</label>
            <select name="special_work_condition" id="special_work_condition">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="countryside_work">Работа в сельской местности</label>
            <select name="countryside_work" id="countryside_work">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="night_work_hours">Количество часов работы в ночное время</label>
            <input type="number" name="night_work_hours" id="night_work_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="holiday_work_hours">Количество часов работы в выходные и праздничные дни</label>
            <input type="number" name="holiday_work_hours" id="holiday_work_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="overtime_work_hours">Количество часов сверхурочной работы</label>
            <input type="number" name="overtime_work_hours" id="overtime_work_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="ecology_zone">Работа в зоне экологического бедствия</label>
            <select name="ecology_zone" id="ecology_zone">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['ecology_types'] as $ecology_type_key => $ecology_type_val): ?>
                    <option value="<?php echo $ecology_type_key ?>"><?php echo $ecology_type_val ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field-block">
            <label for="radiation_zone">Работа на территориях радиационного риска</label>
            <select name="radiation_zone" id="radiation_zone">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['radiation_types'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="field-block">
            <label for="correction_class">Преподавание в классах коррекции</label>
            <select name="correction_class" id="correction_class">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="inclusive_children">Наличие в классах инклюзивных детей</label>
            <select name="inclusive_children" id="inclusive_children">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['inclusive_types'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="class_leader">Классное руководство</label>
            <select name="class_leader" id="class_leader">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['class_types'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="checking_hours">Количество часов проверки письменных работ, не более количества часов нагрузки</label>
            <input type="number" name="checking_hours" id="checking_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="subject">Предмет</label>
            <input type="number" name="subject" id="subject" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="english_subject">Предмет, преподаваемый на английском языке</label>
            <select name="english_subject" id="english_subject">
                <option value="">Выбрать</option>
            </select>
        </div>
        <div class="field-block">
            <label for="english_hours">Количество часов преподавания на английском языке предметов: физика, химия, биология, информатика</label>
            <input type="number" name="english_hours" id="english_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="updated_content">Работа в условиях обновленного содержания образования</label>
            <select name="updated_content" id="updated_content">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="head_boarding_school">Заведование интернатом при учебном заведении</label>
            <select name="head_boarding_school" id="head_boarding_school">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="head_classrooms">Заведование учебными кабинетами (лабораториями, мастерскими) согласно протоколу работодателяо</label>
            <select name="head_classrooms" id="head_classrooms">
                <option value="">Выбрать</option>
                <?php foreach ($arResult['classroom_types'] as $key => $val): ?>
                    <option value="<?php echo $key ?>"><?php echo $val ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="field-block">
            <label for="school_manager">Руководство школой (музыкальной, художественной школой, школой искусств и согласно протоколу работодателя)</label>
            <select name="school_manager" id="school_manager">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="teach_work_manager">Руководство учебной работой (в музыкальной, художественной школе, школе искусств согласно протоколу работодателя)</label>
            <select name="teach_work_manager" id="teach_work_manager">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="library_fond">Работа с библиотечным фондом</label>
            <select name="library_fond" id="library_fond">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="teach_on_lang">Преподавание на казахском, других национальных / русском языках в 1 - 4 классах школ (классов) с казахским / русским языком обучения</label>
            <select name="teach_on_lang" id="teach_on_lang">
                <option value="">Выбрать</option>
            </select>
        </div>
        <div class="field-block">
            <label for="deviant_children">Работа с детьми с девиантным поведением</label>
            <select name="deviant_children" id="deviant_children">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="work_with_orphans">Работа с детьми-сиротами и детьми оставшимися без попечения родителей</label>
            <select name="work_with_orphans" id="work_with_orphans">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>
        <div class="field-block">
            <label for="profile_subject_hours">Количество часов по предметам профильного направления в специализированных организациях образования (углубленное изучение)</label>
            <input type="number" name="profile_subject_hours" id="profile_subject_hours" placeholder="Введите кол-во часов">
        </div>
        <div class="field-block">
            <label for="in_innovation">Работа в режиме инноваций, эксперемента</label>
            <select name="in_innovation" id="in_innovation">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="sanatorium">Педагогическая работа в санаторных организациях</label>
            <select name="sanatorium" id="sanatorium">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="production_org">Организация производственного обучения</label>
            <select name="production_org" id="production_org">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="pos_combination">Совмещение должностей (расширение зоны обслуживания)</label>
            <select name="pos_combination" id="pos_combination">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="absent_person_work">Выполнение обязанностей временно отсутствующего работника (за исключением взаимозаменяемости по акту работодателя)</label>
            <select name="absent_person_work" id="absent_person_work">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="harmful_condition">Вредные (особо вредные) и опасные (особо опасные) условия труда</label>
            <select name="harmful_condition" id="harmful_condition">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="young_specialist">Молодой специалист, стаж до 1 года (согласно протоколу работодателя)</label>
            <select name="young_specialist" id="young_specialist">
                <option value="">Выбрать</option>
            </select>
        </div>

        <div class="field-block">
            <label for="mentoring">Наставничество (согласно протоколу работодателя)</label>
            <select name="mentoring" id="mentoring">
                <option value="0">Нет</option>
                <option value="1">Да</option>
            </select>
        </div>

        <div class="field-block">
            <label for="academic_degree">Наличие академической степень</label>
            <select name="academic_degree" id="academic_degree">
                <option value="">Выбрать</option>
            </select>
        </div>

        <div class="field-block">
            <label for="academic_title">Наличие академического звания</label>
            <select name="academic_title" id="academic_title">
                <option value="">Выбрать</option>
            </select>
        </div>

    </form>

    <div class="calc-result-modal">
        Результат:
        <span></span>
    </div>

    <div class="calc-result">Результат: <span></span></div>
</div>