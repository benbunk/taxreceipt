<?php
/**
 * @file taxreceipt.tpl.php
 * 
 * variables
 * - $line_items array
 *     $line_items[$title]['title'] = $title;
 *     $line_items[$title]['description'] = $description;
 *     $line_items[$title]['percentage'] = $percentage;
 *     e.g. $line_items = array('National Defense' => '24.9', ... )
 */
$vars = get_defined_vars();
dsm($vars); 
?>
<body id="taxr-page">
<div id="taxr-header">
  <div class="taxr-info">
    <div class="city">Washington, DC</div>
    <div class="date">April, 2012</div>
  </div>
</div>
<div id="taxr-header-title">
  <h1>Your Federal Taxpayer Receipt</h1>
  <hr class="subtitle-rule" />
  <div class="subtitle">Understand how and where your tax dollars are being spent</div>
</div>
<div id="taxr-tabset">
	<div id="taxr-calculate" class="taxr-tab">
		<div id="taxr-calculate-form-top">
			<div id="taxr-calculate-form">
			  <div class="taxr-instructions">Enter your 2011 payments below or select an estimate from the drop down menu</div>
				<div id="taxr-error-numeric">There is an error with one of your inputs &mdash; please only use positive, numeric values (0-9) </div>
				<div id="taxr-input" class="input-1">
					<label>Social Security Tax</label>
					<input name="taxr-input-socsec" value="Enter Dollar Amount">
					<a href="javascript:;" id="taxr-info-btn-socsec" title="Please enter the amount of Social Security taxes you paid in 2011. You can generally find this information on the Form W-2 your employer sent you, in box 4, labeled 'Social security tax withheld.'"></a>
				</div>
				<div id="taxr-input" class="input-2">
					<label>Medicare Tax</label>
					<input name="taxr-input-medicare" value="Enter Dollar Amount">
					<a href="javascript:;" id="taxr-info-btn-medicare" title="Please enter the amount of Medicare taxes you paid in 2011. You can generally find this information on the Form W-2 your employer sent you, in box 6, labeled 'Medicare tax withheld.'"></a>
				</div>
				<div id="taxr-input" class="input-3">
					<label>Income Tax</label>
					<input name="taxr-input-income" value="Enter Dollar Amount">
					<a href="javascript:;" id="taxr-info-btn-income" title="Please enter the amount of your income tax liability for 2011.  This is not the additional amount you owe (if any) on April 15 but rather the whole amount of federal income taxes for 2011: amounts already withheld from your paycheck during 2011 plus any additional amount paid on April 15 or minus any refund you applied for on April 15.  You can generally find this total figure in your income tax return, line 11 of Form 1040EZ or line 55 of Form 1040."></a>
				</div>
				<div id="taxr-calculate-button"></div>
				<div class="taxr-income-instr">Don't have your tax information handy?</div>		
			</div>
		</div>
		<div id="taxr-calculate-range-container"> 
			<div id="taxr-range-row" class="clearfix">
				<div id="taxr-range-toggle"></div>
			</div>
			<div id="taxr-range-select">
			    <div class="range-container">
					<a href="javascript:;" id="taxr-range-link-one" data-socsec="1050" data-medicare="363" data-income="1775">$25,000 income &mdash; single with no children</a><br />
					<p id="taxr-range-text">This assumes this family example contributes 2 percent of their wage income to a 401(k) or IRA, does not itemize, claims the Saver's Credit, and Making Work Pay.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-two" data-socsec="1441" data-medicare="497" data-income="803">$35,000 income &mdash; single parent with one child</a><br />
					<p id="taxr-range-text">This assumes this family example contributes 2 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Saver's Credit, as well as Making Work Pay, the EITC, and the Child Tax Credit.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-three" data-socsec="2100" data-medicare="725" data-income="995">$50,000 income &mdash; married with one child</a><br />
					<p id="taxr-range-text">This assumes this family contributes 2 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Saver's Credit, as well as the Making Work Pay and Child Tax Credits.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-four" data-socsec="2520" data-medicare="870" data-income="4558">$60,000 income &mdash; single parent with one child</a><br />
					<p id="taxr-range-text">This assumes this family contributes 5 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Making Work Pay and Child Tax Credits.</p>
					</div>
					<div class="range-container">
					<a href="javascript:;" id="taxr-range-link-five" data-socsec="3360" data-medicare="1160" data-income="4590">$80,000 income &mdash; married with two children</a><br />
					<p id="taxr-range-text">This assumes this family contributes 5 percent of their wage income to a 401(k) or IRA, does not itemize, and claims the Making Work Pay and Child Tax Credits.</p>
					</div>
			</div>
		</div>
		<div class="taxr-top-row-first">
			<div id="taxr-bluea">PROGRAMS & SERVICES</div><div id="taxr-blueb">YOUR TAX PAYMENT</div>
		</div>
		<div class="taxr-top-row ">		
			<div id="taxr-cola"><h3>Social Security Tax</h3></div><div id="taxr-colb"><div id="data-socsec-tax">$0</div></div>
			<div id="taxr-cola"><b>Social Security Retirement, Survivors, and Disability Insurance</b></div><div id="taxr-colb"><div id="data-socsec-sub">$0</div></div>
		</div>
		<div class="clearfix"></div>
		<div class="taxr-top-row">		
			<div id="taxr-cola"><h3>Medicare Tax</h3></div><div id="taxr-colb"><div id="data-medicare-tax">$0</div></div>
			<div id="taxr-cola"><b>Medicare Hospital Insurance</b></div><div id="taxr-colb"><div id="data-medicare-sub">$0</div></div>
		</div>
		<div class="clearfix"></div>
		<div id="taxr-income-row" class="taxr-top-row">		
			<div class="taxr-col1"><span id="taxr-subhead">Income Tax</span><span id="taxr-cat-toggle"><a href="javascript:;" id="taxr-cat-expand-all" class="underline">Expand All Sub-Categories</a><a href="javascript:;" id="taxr-cat-collapse-all">Collapse All Sub-Categories</a></span></div>
			<div class="taxr-col2">% of Total Income<br /> Tax Payment</div>
			<div class="taxr-col3"><div id="data-income-tax">$0</div></div>
		</div>
		<div class="clearfix"></div>
		<div id="taxr-categories">
      <!-- CONTINUE HERE. LOOP THROUGH LINE ITEMS TO GENERATE THIS STUFF  -->
			<div id="taxr-cat-head-defense" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-defense" class="underline2" title="Spending on military personnel, operations, procurement and other activities critical to our national defense. (Corresponds to budget function 050)">National Defense</a></div><div class="taxr-col2">24.9%</div><div class="taxr-col3"><div id="taxr-data-percent-defense" data-percent="24.9">$0</div></div></div></div>
				<div id="taxr-cat-content-defense" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-defense1" title="Spending on salaries and benefits for military personnel as well as housing benefits for military families. (Corresponds to budget function 050 accounts for Military Personnel, Family Housing, and Concurrent Receipt Accrual Payments to the Military Retirement Fund)">Military personnel salaries and benefits</a></div><div class="taxr-col2">5.8%</div><div class="taxr-col3"><div id="taxr-data-percent-defense1" data-percent="5.8">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-defense2" title="Spending on ongoing operations, equipment and supplies for national defense. (Corresponds to budget function 050 account for Operation and Maintenance)">Ongoing operations, equipment, and supplies</a></div><div class="taxr-col2">10.3%</div><div class="taxr-col3"><div id="taxr-data-percent-defense2" data-percent="10.3">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-defense3" title="Spending on construction, research, testing, and procurement of weapons, ships, and other goods and services. (Corresponds to budget function 050 accounts for Research, Development, Test and Evaluation, Procurement, and Military Construction)">Research, development, weapons, and construction</a></div><div class="taxr-col2">7.9%</div><div class="taxr-col3"><div id="taxr-data-percent-defense3" data-percent="7.9">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-defense4" title="Spending on atomic energy defense activities. (Corresponds to budget subfunction 053)">Atomic energy defense activities</a></div><div class="taxr-col2">0.7%</div><div class="taxr-col3"><div id="taxr-data-percent-defense4" data-percent="0.7">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-defense5" title="Spending on defense-related FBI activities, Department of Defense revolving funds, and additional national defense activities. (Corresponds to the remainder of budget function 050)">Defense-related FBI activities and additional national defense</a></div><div class="taxr-col2">0.2%</div><div class="taxr-col3"><div id="taxr-data-percent-defense5" data-percent="0.2">$0</div></div></div>
				</div>
			<div id="taxr-cat-head-healthcare"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-healthcare" class="underline2"  title="Spending on Medicare Supplementary Medical Insurance and the prescription drug benefit, Medicaid, Children's Health Insurance Program, food safety, disease control and additional health care activities. Because this calculator focuses on how income taxes are spent, spending from Medicare taxes is excluded. Additionally, health care for the armed forces is included under National Defense and health care for veterans is included under Veterans Benefits. (Corresponds to budget functions 550 and 570)">Health care</a></div><div class="taxr-col2">23.7%</div><div class="taxr-col3"><div id="taxr-data-percent-healthcare" data-percent="23.7">$0</div></div></div></div>
				<div id="taxr-cat-content-healthcare" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-healthcare1" title="Spending on grants to states for Medicaid and CHIP. (Corresponds to budget function 550 accounts for Grants to States for Medicaid, and Children's Health Insurance Program)">Medicaid and Children's Health Insurance Program (CHIP)</a></div><div class="taxr-col2">10.0%</div><div class="taxr-col3"><div id="taxr-data-percent-healthcare1" data-percent="10.0">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-healthcare2" title="Spending for Medicare Supplementary Medical Insurance and the prescription drug benefit. Medicare helps pay for health care for insured seniors and individuals with disabilities. Because this calculator focuses on how income taxes are spent, spending from Medicare taxes &mdash; which primarily help pay for hospitalizations &mdash; is excluded. (Corresponds to budget function 570)">Medicare physician, prescription drug, and other payments</a></div><div class="taxr-col2">10.5%</div><div class="taxr-col3"><div id="taxr-data-percent-healthcare2" data-percent="10.5">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-healthcare3" title="Spending on the National Institutes of Health, Food and Drug Administration, and other health research and food safety activities. (Corresponds to budget subfunctions 552 and 554)">Health research and food safety</a></div><div class="taxr-col2">1.4%</div><div class="taxr-col3"><div id="taxr-data-percent-healthcare3" data-percent="1.4">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-healthcare4" title="Spending on the disease control, substance abuse services, Indian health services, and other public health. (Corresponds to budget subfunction 551 accounts for Substance Abuse and Mental Health Services, Indian Health, Health Resources and Services Administration, Disease Control, Research, and Training, Public Health and Social Services Emergency Fund, Biodefense Countermeasures Acquisition, and Vaccine Injury Trust Fund Account)">Disease control and public health services</a></div><div class="taxr-col2">0.8%</div><div class="taxr-col3"><div id="taxr-data-percent-healthcare4" data-percent="0.8">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-healthcare5" title="Spending on COBRA tax credit, Federal employees' health benefits, and additional health care activities. (Corresponds to remainder of budget function 550)">COBRA tax credit and additional health care activities</a></div><div class="taxr-col2">0.9%</div><div class="taxr-col3"><div id="taxr-data-percent-healthcare5" data-percent="0.9">$0</div></div></div>
				</div>
			<div id="taxr-cat-head-income" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income" class="underline2" title="Spending on unemployment insurance, food assistance, relevant tax credits, and other programs designed for income security. Because this calculator focuses on how income taxes are spent, spending from unemployment insurance taxes is excluded. (Corresponds to budget function 600)">Job and Family Security</a></div><div class="taxr-col2">19.1%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity" data-percent="19.1">$0</div></div></div></div>
				<div id="taxr-cat-content-income" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income1" title="Because this calculator focuses on how income taxes are spent, spending from unemployment insurance taxes – which pays for normal UI benefits provided by your state – is excluded, while federal UI benefits such as the Extended Benefits program is included. (Corresponds to budget subfunction 603)">Unemployment insurance</a></div><div class="taxr-col2">2.3%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity1" data-percent="2.3">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income2" title="Spending on food and nutrition assistance, including SNAP (formerly food stamps), the school lunch program, and the special supplemental food program for women, infants, and children. (Corresponds to budget subfunction 605)">Food and nutrition assistance</a></div><div class="taxr-col2">3.7%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity2" data-percent="3.7">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income3" title="Spending on housing assistance, including the first-time homebuyer tax credit and rental assistance. (Corresponds to budget subfunction 604)">Housing assistance</a></div><div class="taxr-col2">2.0%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity3" data-percent="2.0">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income4" title="Spending to pay for the Earned Income Tax Credit, the Making Work Pay Tax Credit, and the Child Tax Credit. (Corresponds to relevant accounts in budget function 600)">Earned income, Making Work Pay, and child tax credits</a></div><div class="taxr-col2">3.3%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity4" data-percent="3.3">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income5" title="Spending to pay for SSI, a program to provide basic support for low-income aged, blind, or disabled people. (Corresponds to budget function 600 accounts for Supplemental Security Income, Supplemental Security Income Administrative Expenses, and SSI Recoveries and Receipts)">Supplemental Security Income</a></div><div class="taxr-col2">1.9%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity5" data-percent="1.9">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income9" title="Spending on Federal military and civilian employee retirement and disability. (Corresponds to the remainder of budget subfunction 602)">Federal military and civilian employee retirement and disability</a></div><div class="taxr-col2">4.4%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity9" data-percent="4.4">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income6" title="Spending to provide adoption and foster care services, child care entitlements to states, and related activities. (Corresponds to budget function 600 accounts for Child Support and Family Support Programs, Federal Share of Child Support Collections, Child Care Entitlement to States, Foster Care and Adoption Assistance, and Child care and Development Block Grant)">Child care, foster care, and adoption support</a></div><div class="taxr-col2">0.6%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity6" data-percent="0.6">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income7" title="Spending to provide block grants to states for time-limited assistance to needy families. (Corresponds to budget function 600 account for Temporary Assistance for Needy Families (TANF) and Related Programs)">Temporary Assistance for Needy Families</a></div><div class="taxr-col2">0.7%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity7" data-percent="0.7">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-income8" title="Spending on retirement and unemployment benefit programs for railroad workers and their families as well as other income security activities. (Corresponds to the remainder of budget function 600)">Railroad retirement and additional income security</a></div><div class="taxr-col2">0.5%</div><div class="taxr-col3"><div id="taxr-data-percent-incomesecurity8" data-percent="0.5">$0</div></div></div>
				</div>
			<div id="taxr-cat-head-education"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-education" class="underline2" title="Spending on student financial aid, special education, job training, and other educational and job activities. (Corresponds to budget function 500)">Education and Job Training</a></div><div class="taxr-col2">3.6%</div><div class="taxr-col3"><div id="taxr-data-percent-education" data-percent="3.6">$0</div></div></div></div>
				<div id="taxr-cat-content-education" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-education1" title="Spending on elementary, secondary and vocational education, including grants for special education and schools with high percentages of disadvantaged children. (Corresponds to budget subfunction 501)">Elementary, secondary, and vocational education</a></div><div class="taxr-col2">2.4%</div><div class="taxr-col3"><div id="taxr-data-percent-education1" data-percent="2.4">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-education2" title="Spending on higher education financial aid, including Pell Grants. (Corresponds to budget subfunction 502) This category includes a bookkeeping offset in 2011 due to lower-than-expected costs for student aid loans provided in previous years, and for expected returns for new student loans issued that year. Without this offset, spending in this category would have accounted for approximately 1% of your income tax payment.">Student financial aid for college</a></div><div class="taxr-col2">0.04%</div><div class="taxr-col3"><div id="taxr-data-percent-education2" data-percent="0.04">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-education3" title="Spending on job training and employment services, including trade adjustment assistance. (Corresponds to budget subfunction 504)">Job training and employment services</a></div><div class="taxr-col2">0.3%</div><div class="taxr-col3"><div id="taxr-data-percent-education3" data-percent="0.3">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-education4" title="Spending on employment training for people with disabilities, Head Start, and social services for the elderly, children, and families, and additional education and job training activities. (Corresponds to remainder of budget function 500)">Employment training for people with disabilities and additional education and job services</a></div><div class="taxr-col2">0.9%</div><div class="taxr-col3"><div id="taxr-data-percent-education4" data-percent="0.9">$0</div></div></div>
				</div>
			<div id="taxr-cat-head-veterans" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-veterans" class="underline2" title="Spending on benefits for veterans, including health care, disability compensation, pension, education, and home loans. (Corresponds to budget function 700)">Veterans Benefits</a></div><div class="taxr-col2">4.5%</div><div class="taxr-col3"><div id="taxr-data-percent-veterans" data-percent="4.5">$0</div></div></div></div>
				<div id="taxr-cat-content-veterans" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-veterans1" title="Spending for veterans’ disability compensation, pensions for low-income veterans, life insurance, and housing assistance. (Corresponds to budget subfunctions 701 and 704)">Income and housing support</a></div><div class="taxr-col2">2.1%</div><div class="taxr-col3"><div id="taxr-data-percent-education1" data-percent="2.1">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-veterans2" title="Spending on medical and hospital care for veterans. (Corresponds to budget subfunction 703)">Health care</a></div><div class="taxr-col2">1.8%</div><div class="taxr-col3"><div id="taxr-data-percent-education2" data-percent="1.8">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-veterans3" title="Spending on the GI Bill, cemetery administration, claims processing, and additional veterans benefits. (Corresponds to remainder of function 700)">Education, training, and additional veterans benefits</a></div><div class="taxr-col2">0.6%</div><div class="taxr-col3"><div id="taxr-data-percent-education3" data-percent="0.6">$0</div></div></div>
				</div>				
			<div id="taxr-cat-head-natural"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-environment" class="underline2" title="Spending on water management, energy supply, pollution control, and other activities related to natural resources, energy, and the environment. (Corresponds to budget functions 270 and 300)">Natural Resources, Energy, and Environment</a></div><div class="taxr-col2">2.0%</div><div class="taxr-col3"><div id="taxr-data-percent-environment" data-percent="2.0">$0</div></div></div></div>
				<div id="taxr-cat-content-natural" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-environment1" title="Spending on managing the nation's water and land, including flood prevention, water conservation, and forest management. (Corresponds to budget subfunctions 301 and 302)">Water and land management</a></div><div class="taxr-col2">0.8%</div><div class="taxr-col3"><div id="taxr-data-percent-environment1" data-percent="0.9">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-environment2" title="Spending on renewable energy development, the Tennessee Valley Authority, and other acitivites related to energy supply and conservation.  (Corresponds to budget subfunctions 271 and 272)">Energy supply and conservation</a></div><div class="taxr-col2">0.5%</div><div class="taxr-col3"><div id="taxr-data-percent-environment2" data-percent="0.5">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-environment3" title="Spending on pollution control, emergency energy preparedness, recreation, and other activities related to natural resources and the environment. (Corresponds to the remainder of budget functions 270 and 300)"> Environmental protection and other energy and natural resources</a></div><div class="taxr-col2">0.7%</div><div class="taxr-col3"><div id="taxr-data-percent-environment3" data-percent="0.7">$0</div></div></div>
				</div>		
			<div id="taxr-cat-head-international" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-international" class="underline2" title="Spending on embassies, exchange activities, humanitarian assistance, and other activities related to international affairs. (Corresponds to budget function 150)">International Affairs</a></div><div class="taxr-col2">1.6%</div><div class="taxr-col3"><div id="taxr-data-percent-international" data-percent="1.6">$0</div></div></div></div>
				<div id="taxr-cat-content-international" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-international1" title="Spending on development and humanitarian assistance, including disaster assistance, refugee programs, global health, and food aid. (Corresponds to budget subfunction 151)">Development and humanitarian assistance</a></div><div class="taxr-col2">0.8%</div><div class="taxr-col3"><div id="taxr-data-percent-international1" data-percent="0.8">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-international2" title="Spending on security assistance, including nonproliferation programs and grants to foreign militaries. (Corresponds to budget subfunction 152)">Security assistance</a></div><div class="taxr-col2">0.4%</div><div class="taxr-col3"><div id="taxr-data-percent-international2" data-percent="0.4">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-international3" title="Spending on embassies, conducting of diplomacy, international financial organizations, and additional international affairs activities. (Corresponds to remainder of budget function 150)">Foreign affairs, embassies, and additional international affairs</a></div><div class="taxr-col2">0.4%</div><div class="taxr-col3"><div id="taxr-data-percent-international3" data-percent="0.4">$0</div></div></div>
				</div>				
			<div id="taxr-cat-head-space"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-space" class="underline2" title="Spending on general science, basic research, and space flight. (Corresponds to budget function 250)">Science, Space, and Technology Programs</a></div><div class="taxr-col2">1.0%</div><div class="taxr-col3"><div id="taxr-data-percent-science" data-percent="1.0">$0</div></div></div></div>
				<div id="taxr-cat-content-space" class="taxr-cat-sub">
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-space1" title="Spending on space flight, research, and supporting activities. (Corresponds to budget subfunction 252)">NASA</a></div><div class="taxr-col2">0.6%</div><div class="taxr-col3"><div id="taxr-data-percent-science1" data-percent="0.6">$0</div></div></div>
					<div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-space2" title="Spending on science and basic research through the National Science Foundation, Department of Energy, and other agencies besides NASA. (Corresponds to the remainder of budget function 250)">National Science Foundation and additional science research and laboratories</a></div><div class="taxr-col2">0.4%</div><div class="taxr-col3"><div id="taxr-data-percent-science2" data-percent="0.4">$0</div></div></div>
				</div>			
			<div id="taxr-cat-tophead" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-immigration" title="Spending on border security, immigration enforcement, litigation, the federal judiciary, and other activities related to the administration of justice. (Corresponds to budget function 750)">Immigration, Law Enforcement, and Administration of Justice</a></div><div class="taxr-col2">2.0%</div><div class="taxr-col3"><div id="taxr-data-percent-law" data-percent="2.0">$0</div></div></div></div>
			<div id="taxr-cat-tophead"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-agriculture" title="Spending on agricultural activities, including research, crop insurance, and agricultural subsidies. (Corresponds to budget function 350)">Agriculture</a></div><div class="taxr-col2">0.7%</div><div class="taxr-col3"><div id="taxr-data-percent-agriculture" data-percent="0.7">$0</div></div></div></div>
			<div id="taxr-cat-tophead" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-community" title="Spending on activities to strengthen communities, including spending on the Community Development Fund. Other major accounts are Operation of Indian Programs, the Neighborhood Stabilization Program, and the Rural Water and Waste Disposal Program Account. (Corresponds to budget subfunctions 451 and 452)">Community, Area, and Regional Development</a></div><div class="taxr-col2">0.5%</div><div class="taxr-col3"><div id="taxr-data-percent-community" data-percent="0.5">$0</div></div></div></div>
			<div id="taxr-cat-tophead"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-disaster" title="Spending on natural disaster response and insurance, including Small Business Administration disaster loans and FEMA grants. (Corresponds to budget subfunction 453)">Response to Natural Disasters</a></div><div class="taxr-col2">0.4%</div><div class="taxr-col3"><div id="taxr-data-percent-natural" data-percent="0.4">$0</div></div></div></div>
			<div id="taxr-cat-tophead" class="odd"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-other" title="Spending on all other government programs, including transportation, promotion of commerce, mortgage credit, and governmental administration. Because this calculator focuses on how income taxes are spent, spending from Social Security and Highway Trust Fund taxes is excluded.">Additional Government Programs</a></div><div class="taxr-col2">7.9%</div><div class="taxr-col3"><div id="taxr-data-percent-other" data-percent="7.9">$0</div></div></div></div>
			<div id="taxr-cat-tophead"><div class="taxr-row"><div class="taxr-col1"><a href="javascript:;" id="taxr-info-cat-agriculture" title="Spending on interest, including interest on Treasury debt securities. (Corresponds to budget function 900)">Net Interest</a></div><div class="taxr-col2">8.1%</div><div class="taxr-col3"><div id="taxr-data-percent-interest" data-percent="7.4">$0</div></div></div></div>

		</div>
		<div id="taxr-total-bar">
			<div id="taxr-cola" class="taxr-total-label">TOTAL INCOME AND PAYROLL TAXES YOU PAID</div>
			<div id="taxr-colb"><div id="taxr-data-totaltax"></div></div>
		</div>
		<div id="taxr-nav-numbers"><a class="numbers-link" href="#taxr-numbers">Learn more about the numbers</a></div>
		<!--share links-->
    <div id="taxr-social-links">
    		<a href="http://www.facebook.com/share.php?s=100&amp;p[title]=Your 2011 Federal Taxpayer Receipt&amp;p[url]=http://www.whitehouse.gov/2011-taxreceipt&amp;p[images][0]= http://www.whitehouse.gov/sites/default/files/calulator_fb_share.jpg" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_facebook_btn.png"></a>&nbsp;&nbsp;<a href="http://twitter.com/home/?status=Understand%20where%20your%20federal%20tax%20dollars%20are%20being%20spent%20with%20the%20White%20House%20tax%20receipt%20tool%3A%20http%3A//wh.gov/tax-receipt%20via%20@whitehouse" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_twitter_btn.png"></a>
    	</div>
		  <div id="taxr-print-link"></div>
    	<!--end share links -->
	</div>
	<div id="taxr-numbers" class="taxr-tab">
	    <a class="calculate-button" href="#">Calculate Your Tax Receipt</a>
  		<h3>How the Federal Taxpayer Receipt Amounts are Calculated</h3>
  		
		<p>Amounts in the Federal Taxpayer Receipt are based on the percentage of overall federal spending for each category in the Fiscal Year 2011</p>
    <h3>Overall Federal Spending</h3>
    <div class="chart-container clearfix">
		<div id="container" style="width: 300px; height: 300px; margin: 0 auto; float:left;"></div>
		</div>
		<p>The Medicare Hospital Insurance and Social Security trust funds are funded primarily with dedicated payroll taxes. Because the amount you contribute to these trust funds is readily available on your W-2 form that you get from your employer, these tax payments are shown separately on the tax receipt. There are other key federal programs paid for with dedicated funding sources independent of federal income tax payments, such as highway and mass transit spending. If the cost of these programs exceeds the amount of funding, the difference covered by your tax dollars is shown on the tax receipt.</p>
 
		<p>Even including revenue from all these sources, Federal Government spending has exceeded the revenue it collects since 2002. This shortfall between revenues and spending is known as the budget deficit, and in 2011 it was $1.300 trillion. Learn more about how<a href="http://www.whitehouse.gov/blog/2012/02/13/2013-budget-0" target="_blank"> President Obama's budget would reduce the budget deficit</a> at WhiteHouse.gov.</a></p>
 
		<h3>Organization of the Budget</h3>

		<p>The categories on the tax receipt are based on how the federal budget is organized. The budget is organized into 19 major functions according to the major purpose the spending serves &mdash; such as agriculture or national defense.  Within these functions are more specific sub-functions. For example, in the Education, Training, Employment, and Social Services function, there are several sub-functions, including Higher Education. The full list of functions and sub-functions is <a href="http://www.whitehouse.gov/tax-receipt/functions" target="_blank">available here</a>.</p>
	<!--share links-->
	<div id="taxr-nav-numbers" class="taxr-tab-active"><a class="calculate-button2" href="#taxr-numbers">Calculate your receipt</a></div>
  <div id="taxr-social-links">
    		<a href="http://www.facebook.com/share.php?s=100&amp;p[title]=Your 2011 Federal Taxpayer Receipt&amp;p[url]=http://www.whitehouse.gov/2011-taxreceipt&amp;p[images][0]= http://www.whitehouse.gov/sites/default/files/calulator_fb_share.jpg" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_facebook_btn.png"></a>&nbsp;&nbsp;<a href="http://twitter.com/home/?status=Understand%20where%20your%20federal%20tax%20dollars%20are%20being%20spent%20with%20the%20White%20House%20tax%20receipt%20tool%3A%20http%3A//wh.gov/tax-receipt%20via%20@whitehouse" target="_blank"><img src="http://www.whitehouse.gov/files/taxreceipt/images/receipt_twitter_btn.png"></a>
  </div>
  <div id="taxr-print-link"></div>
	<!--share links-->
	</div>
	<div id="taxr-footer-links" class="clearfix">
		<div id="taxr-footer-list">
		  <div class="buffet-links">
		  <div class="buffett-upper"></div>
		  <div class="buffett-left">DID YOU KNOW?<br />1,470 people who made more than $1 million in 2009 paid $0 in federal income taxes.</div>
		  <a class="buffett-right" href="http://www.whitehouse.gov/economy/buffett-rule" target="_blank">The Buffett rule will ensure everyone pays their fair share. Learn More...</a>
		  <div class="buffett-lower"></div>
		  </div>
			<div id="taxr-footer-link-list" style="padding: 0 8px 0 0; border-right: 1px solid #333;"><a target="_blank" class="underline" href="http://www.whitehouse.gov/get-email-updates">Sign up for email updates from the White House</a></div>
			
			<div id="taxr-footer-link-list" style="padding-left: 8px;"><a href="http://www.whitehouse.gov/tax-receipt/feedback" target="_blank" class="underline">Share your thoughts on this receipt</a></div>
      <a id="taxr-embedbox-link" href="javascript:;" data-embed="<p>Copy this code to embed the taxpayer receipt tool on your website:</p><textarea rows='5' cols='30'><iframe scrolling='no' frameborder='0' height='2150' width='700' src='http://www.whitehouse.gov/files/taxreceipt2012/index.html' target='_blank'></iframe></textarea>">Embed the Taxpayer Receipt Tool on Your Own Website</a>
		</div>
	</div>
</div><!-- end #taxr-tabset -->
  <div id="taxr-footer">
  </div><!-- end #taxr-footer -->
</body>
