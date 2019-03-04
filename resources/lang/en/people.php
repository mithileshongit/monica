<?php

return [

    //index
    'people_list_number_kids' => '1 kid|:count kids',
    'people_list_last_updated' => 'Last consulted:',
    'people_list_number_reminders' => '1 reminder|:count reminders',
    'people_list_blank_title' => 'You don’t have anyone in your account yet',
    'people_list_blank_cta' => 'Add someone',
    'people_list_sort' => 'Sort',
    'people_list_stats' => '1 contact|:count contacts',
    'people_list_firstnameAZ' => 'Sort by first name A → Z',
    'people_list_firstnameZA' => 'Sort by first name Z → A',
    'people_list_lastnameAZ' => 'Sort by last name A → Z',
    'people_list_lastnameZA' => 'Sort by last name Z → A',
    'people_list_lastactivitydateNewtoOld' => 'Sort by last activity date newest to oldest',
    'people_list_lastactivitydateOldtoNew' => 'Sort by last activity date oldest to newest',
    'people_list_filter_tag' => 'Showing all the contacts tagged with',
    'people_list_clear_filter' => 'Clear filter',
    'people_list_contacts_per_tags' => '1 contact|:count contacts',
    'people_list_show_dead' => 'Show deceased people (:count)',
    'people_list_hide_dead' => 'Hide deceased people (:count)',
    'people_search' => 'Search your contacts...',
    'people_search_no_results' => 'No relevant contacts found :(',
    'people_list_account_usage' => 'Your account usage: :current/:limit contacts',
    'people_list_account_upgrade_title' => 'Upgrade your account to unlock it to its full potential.',
    'people_list_account_upgrade_cta' => 'Upgrade now',
    'people_list_untagged' => 'View untagged contacts',
    'people_list_filter_untag' => 'Showing all untagged contacts',

    // people add
    'people_add_title' => 'Add a new person',
    'people_add_missing' => 'No Person Found Add New One Now',
    'people_add_firstname' => 'First name',
    'people_add_middlename' => 'Middle name (Optional)',
    'people_add_lastname' => 'Last name (Optional)',
    'people_add_nickname' => 'Nickname (Optional)',
    'people_add_cta' => 'Add',
    'people_save_and_add_another_cta' => 'Submit and add someone else',
    'people_add_success' => ':name has been successfully created',
    'people_add_gender' => 'Gender',
    'people_delete_success' => 'The contact has been deleted',
    'people_delete_message' => 'Delete contact',
    'people_delete_confirmation' => 'Are you sure you want to delete this contact? Deletion is permanent.',
    'people_add_birthday_reminder' => 'Wish happy birthday to :name',
    'people_add_import' => 'Do you want to <a href=":url">import your contacts</a>?',
    'people_edit_email_error' => 'There is already a contact in your account with this email address. Please choose another one.',
    'people_export' => 'Export as vCard',
    'people_add_reminder_for_birthday' => 'Create an annual reminder for the birthday',

    // show
    'section_contact_information' => 'Contact information',
    'section_personal_activities' => 'Activities',
    'section_personal_reminders' => 'Reminders',
    'section_personal_tasks' => 'Tasks',
    'section_personal_gifts' => 'Gifts',
    'section_personal_notes' => 'Notes',

    // archived contacts
    'list_link_to_active_contacts' => 'You are viewing archived contacts. See the <a href=":url">list of active contacts</a> instead.',
    'list_link_to_archived_contacts' => 'List of archived contacts',

    // Header
    'edit_contact_information' => 'Edit contact information',
    'contact_archive' => 'Archive contact',
    'contact_unarchive' => 'Unarchive contact',
    'contact_archive_help' => 'Archived contacts will not be shown on the contact list, but still appear in search results.',
    'call_button' => 'Log a call',
    'set_favorite' => 'Favorite contacts are placed at the top of the contact list',

    // Stay in touch
    'stay_in_touch' => 'Stay in touch',
    'stay_in_touch_frequency' => 'Stay in touch every day|Stay in touch every {count} days',
    'stay_in_touch_invalid' => 'The frequency must be a number greater than 0.',
    'stay_in_touch_premium' => 'You need to upgrade your account to make use of this feature',
    'stay_in_touch_modal_title' => 'Stay in touch',
    'stay_in_touch_modal_desc' => 'We can remind you by email to keep in touch with {firstname} at a regular interval.',
    'stay_in_touch_modal_label' => 'Send me an email every...',

    // Calls
    'modal_call_title' => 'Log a call',
    'modal_call_comment' => 'What did you talk about? (optional)',
    'modal_call_exact_date' => 'The phone call happened on',
    'modal_call_who_called' => 'Who called?',
    'modal_call_emotion' => 'Do you want to log how you felt during this call? (optional)',
    'calls_add_success' => 'The phone call has been saved.',
    'call_delete_confirmation' => 'Are you sure you want to delete this call?',
    'call_delete_success' => 'The call has been deleted successfully',
    'call_title' => 'Phone calls',
    'call_empty_comment' => 'No details',
    'call_blank_title' => 'Keep track of the phone calls you’ve done with {name}',
    'call_blank_desc' => 'You called {name}',
    'call_you_called' => 'You called',
    'call_he_called' => '{name} called',
    'call_emotions' => 'Emotions:',

    // Conversation
    'conversation_blank' => 'Record conversations you have with :name on social media, SMS, ...',
    'conversation_delete_link' => 'Delete the conversation',
    'conversation_edit_title' => 'Edit conversation',
    'conversation_edit_delete' => 'Are you sure you want to delete this conversation? Deletion is permanent.',
    'conversation_add_success' => 'The conversation has been successfully added.',
    'conversation_edit_success' => 'The conversation has been successfully updated.',
    'conversation_delete_success' => 'The conversation has been successfully deleted.',
    'conversation_add_title' => 'Record a new conversation',
    'conversation_add_when' => 'When did you have this conversation?',
    'conversation_add_who_wrote' => 'Who said this message?',
    'conversation_add_how' => 'How did you communicate?',
    'conversation_add_you' => 'You',
    'conversation_add_content' => 'Write down what was said',
    'conversation_add_what_was_said' => 'What did you say?',
    'conversation_add_another' => 'Add another message',
    'conversation_list_table_messages' => 'Messages',
    'conversation_list_table_content' => 'Partial content (last message)',
    'conversation_list_title' => 'Conversations',
    'conversation_list_cta' => 'Log conversation',

    // age - birthday
    'birthdate_not_set' => 'Birthdate is not set',
    'age_approximate_in_years' => 'around :age years old',
    'age_exact_in_years' => ':age years old',
    'age_exact_birthdate' => 'born :date',

    // Last called
    'last_called' => 'Last called: :date',
    'last_called_empty' => 'Last called: unknown',
    'last_activity_date' => 'Last activity together: :date',
    'last_activity_date_empty' => 'Last activity together: unknown',

    // additional information
    'information_edit_success' => 'The profile has been updated successfully',
    'information_edit_title' => 'Edit :name’s personal information',
    'information_edit_avatar' => 'Photo/avatar of the contact',
    'information_edit_max_size' => 'Max :size Kb.',
    'information_edit_firstname' => 'First name',
    'information_edit_lastname' => 'Last name (Optional)',
    'information_edit_description' => 'Description (Optional)',
    'information_edit_description_help' => 'Used on the contact list to add some context, if necessary.',
    'information_edit_unknown' => 'I do not know this person’s age',
    'information_edit_probably' => 'This person is probably...',
    'information_edit_not_year' => 'I know the day and month of the birthdate of this person, but not the year…',
    'information_edit_exact' => 'I know the exact birthdate of this person...',
    'information_no_work_defined' => 'No work information defined',
    'information_work_at' => 'at :company',
    'work_add_cta' => 'Update work information',
    'work_edit_success' => 'Work information have been updated with success',
    'work_edit_title' => 'Update :name’s job information',
    'work_edit_job' => 'Job title (optional)',
    'work_edit_company' => 'Company (optional)',
    'work_information' => 'Work information',

    // food preferences
    'food_preferencies_add_success' => 'Food preferences have been saved',
    'food_preferencies_edit_description' => 'Perhaps :firstname or someone in the :family’s family has an allergy. Or doesn’t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferencies_edit_description_no_last_name' => 'Perhaps :firstname has an allergy. Or doesn’t like a specific bottle of wine. Indicate them here so you will remember it next time you invite them for dinner',
    'food_preferencies_edit_title' => 'Indicate food preferences',
    'food_preferencies_edit_cta' => 'Save food preferences',
    'food_preferencies_title' => 'Food preferences',
    'food_preferencies_cta' => 'Add food preferences',

    // reminders
    'reminders_blank_title' => 'Is there something you want to be reminded of about :name?',
    'reminders_blank_add_activity' => 'Add a reminder',
    'reminders_add_title' => 'What would you like to be reminded of about :name?',
    'reminders_add_description' => 'Please remind me to...',
    'reminders_add_next_time' => 'When is the next time you would like to be reminded about this?',
    'reminders_add_once' => 'Remind me about this just once',
    'reminders_add_recurrent' => 'Remind me about this every',
    'reminders_add_starting_from' => 'starting from the date specified above',
    'reminders_add_cta' => 'Add reminder',
    'reminders_edit_update_cta' => 'Update reminder',
    'reminders_add_error_custom_text' => 'You need to indicate a text for this reminder',
    'reminders_create_success' => 'The reminder has been added successfully',
    'reminders_delete_success' => 'The reminder has been deleted successfully',
    'reminders_update_success' => 'The reminder has been updated successfully',

    'reminder_frequency_day' => 'every day|every :number days',
    'reminder_frequency_week' => 'every week|every :number weeks',
    'reminder_frequency_month' => 'every month|every :number months',
    'reminder_frequency_year' => 'every year|every :number year',
    'reminder_frequency_one_time' => 'on :date',
    'reminders_delete_confirmation' => 'Are you sure you want to delete this reminder?',
    'reminders_delete_cta' => 'Delete',
    'reminders_next_expected_date' => 'on',
    'reminders_cta' => 'Add a reminder',
    'reminders_description' => 'We will send an email for each one of the reminders below. Reminders are sent every morning the day events will happen. Reminders automatically added for birthdates can not be deleted. If you want to change those dates, edit the birthdate of the contacts.',
    'reminders_one_time' => 'One time',
    'reminders_type_week' => 'week',
    'reminders_type_month' => 'month',
    'reminders_type_year' => 'year',
    'reminders_birthday' => 'Birthday of :name',
    'reminders_free_plan_warning' => 'You are on the Free plan. No emails are sent on this plan. To receive your reminders by email, upgrade your account.',

    // relationships
    'relationship_form_add' => 'Add a new relationship',
    'relationship_form_edit' => 'Edit an existing relationship',
    'relationship_form_is_with' => 'This person is...',
    'relationship_form_add_choice' => 'Who is the relationship with?',
    'relationship_form_create_contact' => 'Add a new person',
    'relationship_form_associate_contact' => 'An existing contact',
    'relationship_form_associate_dropdown' => 'Search and select an existing contact from the dropdown below',
    'relationship_form_associate_dropdown_placeholder' => 'Search and select an existing contact',
    'relationship_form_also_create_contact' => 'Create a Contact entry for this person.',
    'relationship_form_add_description' => 'This will let you treat this person like any other contact.',
    'relationship_form_add_no_existing_contact' => 'You don’t have any contacts who can be related to :name at the moment.',
    'relationship_delete_confirmation' => 'Are you sure you want to delete this relationship? Deletion is permanent.',
    'relationship_unlink_confirmation' => 'Are you sure you want to delete this relationship? This person will not be deleted – only the relationship between the two.',
    'relationship_form_add_success' => 'The relationship has been successfully set.',
    'relationship_form_deletion_success' => 'The relationship has been deleted.',

    // tasks
    'tasks_blank_title' => 'You don’t have any tasks yet.',
    'tasks_form_title' => 'Title',
    'tasks_form_description' => 'Description (optional)',
    'tasks_add_task' => 'Add a task',
    'tasks_delete_success' => 'The task has been deleted successfully',
    'tasks_complete_success' => 'The task has changed status successfully',

    // activities
    'activity_title' => 'Activities',
    'activity_type_category_simple_activities' => 'Simple activities',
    'activity_type_category_sport' => 'Sport',
    'activity_type_category_food' => 'Food',
    'activity_type_category_cultural_activities' => 'Cultural activities',
    'activity_type_just_hung_out' => 'just hung out',
    'activity_type_watched_movie_at_home' => 'watched a movie at home',
    'activity_type_talked_at_home' => 'just talked at home',
    'activity_type_did_sport_activities_together' => 'did sport together',
    'activity_type_ate_at_his_place' => 'ate at their place',
    'activity_type_went_bar' => 'went to a bar',
    'activity_type_ate_at_home' => 'ate at home',
    'activity_type_picknicked' => 'picknicked',
    'activity_type_ate_restaurant' => 'ate at a restaurant',
    'activity_type_went_theater' => 'went to the theater',
    'activity_type_went_concert' => 'went to a concert',
    'activity_type_went_play' => 'went to a play',
    'activity_type_went_museum' => 'went to the museum',
    'activities_add_activity' => 'Add activity',
    'activities_item_information' => ':Activity. Happened on :date',
    'activities_add_title' => 'What did you do with {name}?',
    'activities_summary' => 'Describe what you did',
    'activities_add_pick_activity' => '(Optional) Would you like to categorize this activity? You don’t have to, but it will give you statistics later on',
    'activities_add_date_occured' => 'The activity happened on...',
    'activities_add_participants' => 'Who, apart from {name}, participated in this activity? (optional)',
    'activities_add_emotions' => 'Do you want to log how you felt during this activity? (optional)',
    'activities_blank_title' => 'Keep track of what you’ve done with {name} in the past, and what you’ve talked about',
    'activities_blank_add_activity' => 'Add an activity',
    'activities_add_success' => 'The activity has been added successfully',
    'activities_add_error' => 'Error when adding the activity',
    'activities_update_success' => 'The activity has been updated successfully',
    'activities_delete_success' => 'The activity has been deleted successfully',
    'activities_who_was_involved' => 'Who was involved?',
    'activities_activity' => 'Activity Category',
    'activities_view_activities_report' => 'View activities report',
    'activities_profile_title' => 'Activities report between :name and you',
    'activities_profile_subtitle' => 'You’ve logged :total_activities activity with :name in total and :activities_last_twelve_months in the last 12 months so far.|You’ve logged :total_activities activities with :name in total and :activities_last_twelve_months in the last 12 months so far.',
    'activities_profile_year_summary_activity_types' => 'Here is a breakdown of the type of activities you’ve done together in :year',
    'activities_profile_year_summary' => 'Here is what you two have done in :year',
    'activities_profile_number_occurences' => ':value activity|:value activities',

    // notes
    'notes_create_success' => 'The note has been created successfully',
    'notes_update_success' => 'The note has been saved successfully',
    'notes_delete_success' => 'The note has been deleted successfully',
    'notes_add_cta' => 'Add note',
    'notes_favorite' => 'Add/remove from favorites',
    'notes_delete_title' => 'Delete a note',
    'notes_delete_confirmation' => 'Are you sure you want to delete this note? Deletion is permanent',

    // gifts
    'gifts_title' => 'Gifts',
    'gifts_add_success' => 'The gift has been added successfully',
    'gifts_delete_success' => 'The gift has been deleted successfully',
    'gifts_delete_confirmation' => 'Are you sure you want to delete this gift?',
    'gifts_add_gift' => 'Add a gift',
    'gifts_link' => 'Link',
    'gifts_for' => 'For:',
    'gifts_delete_cta' => 'Delete',
    'gifts_add_title' => 'Gift management for :name',
    'gifts_add_gift_idea' => 'Gift idea',
    'gifts_add_gift_already_offered' => 'Gift offered',
    'gifts_add_gift_received' => 'Gift received',
    'gifts_add_gift_title' => 'What is this gift?',
    'gifts_add_link' => 'Link to the web page (optional)',
    'gifts_add_value' => 'Value (optional)',
    'gifts_add_comment' => 'Comment (optional)',
    'gifts_add_someone' => 'This gift is for someone in :name’s family in particular',
    'gifts_ideas' => 'Gift ideas',
    'gifts_offered' => 'Gifts offered',
    'gifts_offered_as_an_idea' => 'Mark as an idea',
    'gifts_received' => 'Gifts received',
    'gifts_view_comment' => 'View comment',
    'gifts_mark_offered' => 'Mark as offered',
    'gifts_update_success' => 'The gift has been updated successfully',

    // debts
    'debt_delete_confirmation' => 'Are you sure you want to delete this debt?',
    'debt_delete_success' => 'The debt has been deleted successfully',
    'debt_add_success' => 'The debt has been added successfully',
    'debt_title' => 'Debts',
    'debt_add_cta' => 'Add debt',
    'debt_you_owe' => 'You owe :amount',
    'debt_they_owe' => ':name owes you :amount',
    'debt_add_title' => 'Debt management',
    'debt_add_you_owe' => 'You owe :name',
    'debt_add_they_owe' => ':name owes you',
    'debt_add_amount' => 'the sum of',
    'debt_add_reason' => 'for the following reason (optional)',
    'debt_add_add_cta' => 'Add debt',
    'debt_edit_update_cta' => 'Update debt',
    'debt_edit_success' => 'The debt has been updated successfully',
    'debts_blank_title' => 'Manage debts you owe to :name or :name owes you',

    // tags
    'tag_edit' => 'Edit tag',
    'tag_add' => 'Add tags',
    'tag_add_search' => 'Add or search tags',
    'tag_no_tags' => 'No tags yet',

    // Introductions
    'introductions_sidebar_title' => 'How you met',
    'introductions_blank_cta' => 'Indicate how you met :name',
    'introductions_title_edit' => 'How did you meet :name?',
    'introductions_additional_info' => 'Explain how and where you met',
    'introductions_edit_met_through' => 'Has someone introduced you to this person?',
    'introductions_no_met_through' => 'No one',
    'introductions_first_met_date' => 'Date you met',
    'introductions_no_first_met_date' => 'I don’t know the date we met',
    'introductions_first_met_date_known' => 'This is the date we met',
    'introductions_add_reminder' => 'Add a reminder to celebrate this encounter on the anniversary this event happened',
    'introductions_update_success' => 'You’ve successfully updated the information about how you met this person',
    'introductions_met_through' => 'Met through <a href=":url">:name</a>',
    'introductions_met_date' => 'Met on :date',
    'introductions_reminder_title' => 'Anniversary of the day you first met',

    // Deceased
    'deceased_reminder_title' => 'Anniversary of the death of :name',
    'deceased_mark_person_deceased' => 'Mark this person as deceased',
    'deceased_know_date' => 'I know the date this person died',
    'deceased_add_reminder' => 'Add a reminder for this date',
    'deceased_label' => 'Deceased',
    'deceased_label_with_date' => 'Deceased on :date',
    'deceased_age' => 'Age at death',

    // Contact information
    'contact_info_title' => 'Contact information',
    'contact_info_form_content' => 'Content',
    'contact_info_form_contact_type' => 'Contact type',
    'contact_info_form_personalize' => 'Personalize',
    'contact_info_address' => 'Lives in',

    // Addresses
    'contact_address_title' => 'Addresses',
    'contact_address_form_name' => 'Label (optional)',
    'contact_address_form_street' => 'Street (optional)',
    'contact_address_form_city' => 'City (optional)',
    'contact_address_form_province' => 'Province (optional)',
    'contact_address_form_postal_code' => 'Postal code (optional)',
    'contact_address_form_country' => 'Country (optional)',
    'contact_address_form_latitude' => 'Latitude (numbers only) (optional)',
    'contact_address_form_longitude' => 'Longitude (numbers only) (optional)',

    // Pets
    'pets_kind' => 'Kind of pet',
    'pets_name' => 'Name (optional)',
    'pets_create_success' => 'The pet has been successfully added',
    'pets_update_success' => 'The pet has been updated',
    'pets_delete_success' => 'The pet has been deleted',
    'pets_title' => 'Pets',
    'pets_reptile' => 'Reptile',
    'pets_bird' => 'Bird',
    'pets_cat' => 'Cat',
    'pets_dog' => 'Dog',
    'pets_fish' => 'Fish',
    'pets_hamster' => 'Hamster',
    'pets_horse' => 'Horse',
    'pets_rabbit' => 'Rabbit',
    'pets_rat' => 'Rat',
    'pets_small_animal' => 'Small animal',
    'pets_other' => 'Other',

    // life events
    'life_event_list_tab_life_events' => 'Life events',
    'life_event_list_tab_other' => 'Notes, reminders, ...',
    'life_event_list_title' => 'Life events',
    'life_event_blank' => 'Log what happens to the life of {name} for your future reference.',
    'life_event_list_cta' => 'Add life event',
    'life_event_create_category' => 'All categories',
    'life_event_create_life_event' => 'Add life event',
    'life_event_create_default_title' => 'Title (optional)',
    'life_event_create_default_story' => 'Story (optional)',
    'life_event_create_date' => 'You do not need to indicate a month or a day - only the year is mandatory.',
    'life_event_create_default_description' => 'Add information about what you know',
    'life_event_create_add_yearly_reminder' => 'Add a yearly reminder for this event',
    'life_event_create_success' => 'The life event has been added',
    'life_event_delete_title' => 'Delete a life event',
    'life_event_delete_description' => 'Are you sure you want to delete this life event? Deletion is permanent.',
    'life_event_delete_success' => 'The life event has been deleted',
    'life_event_date_it_happened' => 'Date it happened',
    'life_event_sentence_new_job' => 'Started a new job',
    'life_event_sentence_retirement' => 'Retired',
    'life_event_sentence_new_school' => 'Started school',
    'life_event_sentence_study_abroad' => 'Studied abroad',
    'life_event_sentence_volunteer_work' => 'Started volunteering',
    'life_event_sentence_published_book_or_paper' => 'Published a paper',
    'life_event_sentence_military_service' => 'Started military service',
    'life_event_sentence_new_relationship' => 'Started a relationship',
    'life_event_sentence_engagement' => 'Got engaged',
    'life_event_sentence_marriage' => 'Got married',
    'life_event_sentence_anniversary' => 'Anniversary',
    'life_event_sentence_expecting_a_baby' => 'Expects a baby',
    'life_event_sentence_new_child' => 'Had a child',
    'life_event_sentence_new_family_member' => 'Added a family member',
    'life_event_sentence_new_pet' => 'Got a pet',
    'life_event_sentence_end_of_relationship' => 'Ended a relationship',
    'life_event_sentence_loss_of_a_loved_one' => 'Lost a loved one',
    'life_event_sentence_moved' => 'Moved',
    'life_event_sentence_bought_a_home' => 'Bought a home',
    'life_event_sentence_home_improvement' => 'Made a home improvement',
    'life_event_sentence_holidays' => 'Went on holidays',
    'life_event_sentence_new_vehicle' => 'Got a new vehicle',
    'life_event_sentence_new_roommate' => 'Got a roommate',
    'life_event_sentence_overcame_an_illness' => 'Overcame an illness',
    'life_event_sentence_quit_a_habit' => 'Quit a habit',
    'life_event_sentence_new_eating_habits' => 'Started new eating habits',
    'life_event_sentence_weight_loss' => 'Lost weight',
    'life_event_sentence_wear_glass_or_contact' => 'Started to wear glass or contact lenses',
    'life_event_sentence_broken_bone' => 'Broke a bone',
    'life_event_sentence_removed_braces' => 'Removed braces',
    'life_event_sentence_surgery' => 'Got a surgery',
    'life_event_sentence_dentist' => 'Went to the dentist',
    'life_event_sentence_new_sport' => 'Started a sport',
    'life_event_sentence_new_hobby' => 'Started a hobby',
    'life_event_sentence_new_instrument' => 'Learned a new instrument',
    'life_event_sentence_new_language' => 'Learned a new language',
    'life_event_sentence_tattoo_or_piercing' => 'Got a tattoo or piercing',
    'life_event_sentence_new_license' => 'Got a license',
    'life_event_sentence_travel' => 'Traveled',
    'life_event_sentence_achievement_or_award' => 'Got an achievement or award',
    'life_event_sentence_changed_beliefs' => 'Changed beliefs',
    'life_event_sentence_first_word' => 'Spoke for the first time',
    'life_event_sentence_first_kiss' => 'Kissed for the first time',

    // documents
    'document_list_title' => 'Documents',
    'document_list_cta' => 'Upload document',
    'document_list_blank_desc' => 'Here you can store documents related to this person.',
    'document_upload_zone_cta' => 'Upload a file',
    'document_upload_zone_progress' => 'Uploading the document...',
    'document_upload_zone_error' => 'There was an error uploading the document. Please try again below.',

    // Photos
    'photo_list_title' => 'Related photos',
    'photo_list_cta' => 'Upload photo',
    'photo_list_blank_desc' => 'You can store images about this contact. Upload one now!',
    'photo_upload_zone_cta' => 'Upload a photo',
    'photo_delete' => 'Delete photo',

    // emotions
    'emotion_this_made_me_feel' => 'This made you feel…',
];
