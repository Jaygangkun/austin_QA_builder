<?php
if(!function_exists('planQuestions')){
    function planQuestions(){
        return array(
            array(
                'text' => 'What is the Stock, Option or Futures being traded?'
            ),
            array(
                'text' => 'What is the date?'
            ),
            array(
                'text' => 'What would be the reason for the Supply or Demand to increase?',
                'type' => 'textarea'
            ),
            array(
                'text' => '(Scaling In) What prices do I plan on entering the trade?'
            ),
            array(
                'text' => 'How much money am I risking?'
            ),
            array(
                'text' => 'What price is my stop?'
            ),
            array(
                'text' => 'How much money do I expect to make?'
            ),
            array(
                'text' => 'What is my potential risk/reward?'
            ),
            array(
                'text' => 'What is the catalyst?'
            ),
            array(
                'text' => 'What is the Technical Analysis event triggering the trade?'
            ),
            array(
                'text' => 'Is the Industry Group strong?'
            ),
            array(
                'text' => 'How are the current market conditions?'
            ),
            array(
                'text' => 'What are the current earnings (EPS, Sales)?'
            ),
            array(
                'text' => 'Is the stock a market leader?'
            ),
            array(
                'text' => 'Is the volume bullish or bearish?'
            ),
            array(
                'text' => 'Is there any upcoming news/events?'
            ),
            array(
                'text' => 'What is your emergency plan (in case a big gap down)?',
                'type' => 'textarea'
            ),
            array(
                'text' => 'Ask the smartest traders/investors you know about this potential trade. What are their thoughts?',
                'type' => 'textarea'
            ),
            array(
                'text' => 'What do you think the probability % of the trade working out is?'
            ),
            array(
                'text' => 'Are earnings increasing each quarter or decreasing?'
            ),
            array(
                'text' => 'What is the short % of the float?'
            ),
            array(
                'text' => 'How long do you plan on holding this trade?'
            ),
            array(
                'text' => 'Does this trade follow your rules?'
            ),
            array(
                'text' => 'Explain the reason for your trade.',
                'type' => 'textarea'
            )
        );
    }
}

if(!function_exists('recapQuestions')){
    function recapQuestions(){
        return array(
            array(
                'text' => 'Date of exit'
            ),
            array(
                'text' => 'Why did you exit the trade?',
                'type' => 'textarea'
            ),
            array(
                'text' => 'How much money did you make or lose?'
            ),
            array(
                'text' => 'What was the profit or loss % on the trade.'
            ),
            array(
                'text' => 'What was your average trade position price?'
            ),
            array(
                'text' => 'What was your exit price or prices (if you scaled out)?'
            ),
            array(
                'text' => 'Did you follow your trading plan?'
            ),
            array(
                'text' => 'Did emotions cause you to make any of your decisions?'
            ),
            array(
                'text' => 'What were the lessons learned from this trade?',
                'type' => 'textarea'
            ),
            array(
                'text' => 'If you can do this trade over again, what would you do differently?',
                'type' => 'textarea'
            ),
            array(
                'text' => 'Did you take profits too soon? If so, why?'
            ),
            array(
                'text' => 'Did you cut your loss too late? If so, why?'
            ),
            array(
                'text' => 'Recap your trade in detail',
                'type' => 'textarea'
            ),
            array(
                'text' => 'Notes',
                'type' => 'textarea'
            ),
        );
    }
}
?>