<?php

namespace Notification\Model;

class NotificationEvents {

    const LEAVE_APPLIED = 1;
    const LEAVE_RECOMMEND_ACCEPTED = 2;
    const LEAVE_RECOMMEND_REJECTED = 3;
    const LEAVE_APPROVE_ACCEPTED = 4;
    const LEAVE_APPROVE_REJECTED = 5;
    const LEAVE_CANCELLED = 6;
    const LEAVE_CANCELLED_RECOMMEND_ACCEPTED = 79;
    const LEAVE_CANCELLED_RECOMMEND_REJECTED = 80;
    const LEAVE_CANCELLED_APPROVE_ACCEPTED = 81;
    const LEAVE_CANCELLED_APPROVE_REJECTED = 82;
    
    const ATTENDANCE_APPLIED = 7;
    const ATTENDANCE_APPROVE_ACCEPTED = 8;
    const ATTENDANCE_APPROVE_REJECTED = 9;
    const ATTENDANCE_CANCELLED = 10;
    
    const TRAVEL_APPLIED = 11;
    const TRAVEL_RECOMMEND_ACCEPTED = 12;
    const TRAVEL_RECOMMEND_REJECTED = 13;
    const TRAVEL_APPROVE_ACCEPTED = 14;
    const TRAVEL_APPROVE_REJECTED = 15;
    const TRAVEL_CANCELLED = 16;
    
    const TRAINING_ASSIGNED = 17;
    const TRAINING_CANCELLED = 18;
    
    const LOAN_APPLIED = 19;
    const LOAN_RECOMMEND_ACCEPTED = 20;
    const LOAN_RECOMMEND_REJECTED = 21;
    const LOAN_APPROVE_ACCEPTED = 22;
    const LOAN_APPROVE_REJECTED = 23;
    const LOAN_CANCELLED = 24;
    
    const ADVANCE_APPLIED = 25;
    const ADVANCE_RECOMMEND_ACCEPTED = 26;
    const ADVANCE_RECOMMEND_REJECTED = 27;
    const ADVANCE_APPROVE_ACCEPTED = 28;
    const ADVANCE_APPROVE_REJECTED = 29;
    const ADVANCE_CANCELLED = 30;
    
    const HOLIDAY_ASSIGNED = 31;
    const HOLIDAY_CANCELLED = 32; 
    
    const LEAVE_ASSIGNED = 33;
    const SHIFT_ASSIGNED = 34;
    
    const SERVICE_EVENT_TYPE_UPDATE = 35;
    
    const SALARY_REVIEW = 36;  
    
    const WORKONDAYOFF_APPLIED = 37;
    const WORKONDAYOFF_RECOMMEND_ACCEPTED = 38;
    const WORKONDAYOFF_RECOMMEND_REJECTED = 39;
    const WORKONDAYOFF_APPROVE_ACCEPTED = 40;
    const WORKONDAYOFF_APPROVE_REJECTED = 41;
    const WORKONDAYOFF_CANCELLED = 42;
    
    const WORKONHOLIDAY_APPLIED = 43;
    const WORKONHOLIDAY_RECOMMEND_ACCEPTED = 44;
    const WORKONHOLIDAY_RECOMMEND_REJECTED = 45;
    const WORKONHOLIDAY_APPROVE_ACCEPTED = 46;
    const WORKONHOLIDAY_APPROVE_REJECTED = 47;
    const WORKONHOLIDAY_CANCELLED = 48;
    
    const TRAINING_APPLIED = 49;
    const TRAINING_RECOMMEND_ACCEPTED = 50;
    const TRAINING_RECOMMEND_REJECTED = 51;
    const TRAINING_APPROVE_ACCEPTED = 52;
    const TRAINING_APPROVE_REJECTED = 53;
    
    const LEAVE_SUBSTITUTE_APPLIED = 54;
    const LEAVE_SUBSTITUTE_ACCEPTED = 55;
    const LEAVE_SUBSTITUTE_REJECTED = 56;
    
    const TRAVEL_SUBSTITUTE_APPLIED = 57;
    const TRAVEL_SUBSTITUTE_ACCEPTED = 58;
    const TRAVEL_SUBSTITUTE_REJECTED = 59;
    
    const FORGOT_PASSWORD = 60;
    
    const KPI_SETTING = 61;
    const KPI_APPROVED = 62;
    const KEY_ACHIEVEMENT = 63;
    const APPRAISAL_EVALUATION = 64;
    const APPRAISAL_REVIEW = 65;
    const APPRAISEE_FEEDBACK = 66;
    const APPRAISAL_FINAL_REVIEW = 75;
    const HR_FEEDBACK = 76;
    const MONTHLY_APPRAISAL_ASSIGNED = 77;
    
    
    const ATTENDANCE_RECOMMEND_ACCEPTED = 67;
    const ATTENDANCE_RECOMMEND_REJECTED = 68;
    
    const OVERTIME_APPLIED = 69;
    const OVERTIME_RECOMMEND_ACCEPTED = 70;
    const OVERTIME_RECOMMEND_REJECTED = 71;
    const OVERTIME_APPROVE_ACCEPTED = 72;
    const OVERTIME_APPROVE_REJECTED = 73;
    const OVERTIME_CANCELLED = 74;
    
    const BIRTHDAY_WISHED= 78;
	const LEAVE_DEDUCTION_REJECTED = 83;
    const LEAVE_DEDUCTION_APPROVED = 84;
    
//    note number 79 80 81 82 already used in leave above
    
}