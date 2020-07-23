@if(is_array($sa_cities))
    @foreach($sa_cities as $key=>$city)
    <tr>
        <td><b></b></td>
        <td><b>{{$key}}</b></td>
        @foreach($city as $data)
            <td>{{$data}}</td>
        @endforeach
    </tr>
    @endforeach.
@endif
{{--
<tr>
    <td><b>1</b></td>
    <td><b>الشعبة</b></td>
    @foreach($sa['الشعبة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>2</b></td>
    <td><b>موقق</b></td>
    @foreach($sa['موقق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>3</b></td>
    <td><b>الأسياح</b></td>
    @foreach($sa['الأسياح'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>4</b></td>
    <td><b>بطحاء</b></td>
    @foreach($sa['بطحاء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>5</b></td>
    <td><b>خليص</b></td>
    @foreach($sa['خليص'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>6</b></td>
    <td><b>الموسم</b></td>
    @foreach($sa['الموسم'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>7</b></td>
    <td><b>الطوال</b></td>
    @foreach($sa['الطوال'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>8</b></td>
    <td><b>حداد بني مالك</b></td>
    @foreach($sa['حداد بني مالك'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>9</b></td>
    <td><b>خباش</b></td>
    @foreach($sa['خباش'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>10</b></td>
    <td><b>بدر الجنوب</b></td>
    @foreach($sa['بدر الجنوب'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>11</b></td>
    <td><b>رفائع الجمش</b></td>
    @foreach($sa['رفائع الجمش'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>12</b></td>
    <td><b>ثول</b></td>
    @foreach($sa['ثول'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>13</b></td>
    <td><b>الدائر</b></td>
    @foreach($sa['الدائر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>14</b></td>
    <td><b>القوارة</b>14</td>
    @foreach($sa['القوارة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>15</b></td>
    <td><b>الرين</b></td>
    @foreach($sa['الرين'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>16</b></td>
    <td><b>تنومة</b></td>
    @foreach($sa['تنومة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>17</b></td>
    <td><b>الحرجة</b></td>
    @foreach($sa['الحرجة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>18</b></td>
    <td><b>فرسان</b></td>
    @foreach($sa['فرسان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>19</b></td>
    <td><b>عريعرة</b></td>
    @foreach($sa['عريعرة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>20</b></td>
    <td><b>السليمانية</b></td>
    @foreach($sa['السليمانية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>21</b></td>
    <td><b>ميقوع</b></td>
    @foreach($sa['ميقوع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>22</b></td>
    <td><b>بارق</b></td>
    @foreach($sa['بارق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>23</b></td>
    <td><b>الشنان</b></td>
    @foreach($sa['الشنان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>24</b></td>
    <td><b>سامودة</b></td>
    @foreach($sa['سامودة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>25</b></td>
    <td><b>ثار</b></td>
    @foreach($sa['ثار'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>27</b></td>
    <td><b>حرض</b></td>
    @foreach($sa['حرض'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>28</b></td>
    <td><b>جديدة عرعر</b></td>
    @foreach($sa['جديدة عرعر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>29</b></td>
    <td><b>عقلة الصقور</b></td>
    @foreach($sa['عقلة الصقور'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>30</b></td>
    <td><b>النبهانية</b></td>
    @foreach($sa['النبهانية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>31</b></td>
    <td><b>الرويضة</b></td>
    @foreach($sa['الرويضة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>32</b></td>
    <td><b>العيدابي</b></td>
    @foreach($sa['العيدابي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>33</b></td>
    <td><b>حوطة سدير</b></td>
    @foreach($sa['حوطة سدير'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>34</b></td>
    <td><b>المضة</b></td>
    @foreach($sa['المضة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>35</b></td>
    <td><b>أحد رفيدة</b></td>
    @foreach($sa['أحد رفيدة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>36</b></td>
    <td><b>العارضة</b></td>
    @foreach($sa['العارضة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>37</b></td>
    <td><b>الدرب</b></td>
    @foreach($sa['الدرب'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>38</b></td>
    <td><b>شواق</b></td>
    @foreach($sa['شواق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>39</b></td>
    <td><b>تبوك</b></td>
    @foreach($sa['تبوك'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>40</b></td>
    <td><b>الخاصرة</b></td>
    @foreach($sa['الخاصرة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>41</b></td>
    <td><b>سكاكا</b></td>
    @foreach($sa['سكاكا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>42</b></td>
    <td><b>عرعر</b></td>
    @foreach($sa['عرعر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>43</b></td>
    <td><b>حائل</b></td>
    @foreach($sa['حائل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>44</b></td>
    <td><b>بريدة</b></td>
    @foreach($sa['بريدة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>45</b></td>
    <td><b>المدينة المنورة</b></td>
    @foreach($sa['المدينة المنورة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>46</b></td>
    <td><b>مكة المكرمة</b></td>
    @foreach($sa['مكة المكرمة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>47</b></td>
    <td><b>الطائف</b></td>
    @foreach($sa['الطائف'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>48</b></td>
    <td><b>الباحة</b></td>
    @foreach($sa['الباحة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>49</b></td>
    <td><b>أبها</b></td>
    @foreach($sa['أبها'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>50</b></td>
    <td><b>خميس مشيط</b></td>
    @foreach($sa['خميس مشيط'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>51</b></td>
    <td><b>جازان</b></td>
    @foreach($sa['جازان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>52</b></td>
    <td><b>نجران</b></td>
    @foreach($sa['نجران'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>53</b></td>
    <td><b>عفيف</b></td>
    @foreach($sa['عفيف'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>54</b></td>
    <td><b>المجمعة</b></td>
    @foreach($sa['المجمعة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>55</b></td>
    <td><b>الدمام</b></td>
    @foreach($sa['الدمام'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>56</b></td>
    <td><b>الخبر</b></td>
    @foreach($sa['الخبر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>57</b></td>
    <td><b>الهفوف</b></td>
    @foreach($sa['الهفوف'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>58</b></td>
    <td><b>جدة</b></td>
    @foreach($sa['جدة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>59</b></td>
    <td><b>الرياض</b></td>
    @foreach($sa['الرياض'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>60</b></td>
    <td><b>حبونا</b></td>
    @foreach($sa['حبونا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>61</b></td>
    <td><b>وادي بن هشبل</b></td>
    @foreach($sa['وادي بن هشبل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>62</b></td>
    <td><b>المحاني</b></td>
    @foreach($sa['المحاني'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>63</b></td>
    <td><b>الدلم</b></td>
    @foreach($sa['الدلم'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>64</b></td>
    <td><b>أبو عريش</b></td>
    @foreach($sa['أبو عريش'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>65</b></td>
    <td><b>بيشة</b></td>
    @foreach($sa['بيشة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>66</b></td>
    <td><b>الدوادمي</b></td>
    @foreach($sa['الدوادمي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>67</b></td>
    <td><b>رابغ</b></td>
    @foreach($sa['رابغ'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>68</b></td>
    <td><b>ينبع</b></td>
    @foreach($sa['ينبع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>69</b></td>
    <td><b>طريف</b></td>
    @foreach($sa['طريف'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>70</b></td>
    <td><b>سراة عبيدة</b></td>
    @foreach($sa['سراة عبيدة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>71</b></td>
    <td><b>الزلفي</b></td>
    @foreach($sa['الزلفي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>72</b></td>
    <td><b>عنيزة</b></td>
    @foreach($sa['عنيزة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>73</b></td>
    <td><b>الرس</b></td>
    @foreach($sa['الرس'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>74</b></td>
    <td><b>مليجة</b></td>
    @foreach($sa['مليجة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>75</b></td>
    <td><b>الجبيل</b></td>
    @foreach($sa['الجبيل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>76</b></td>
    <td><b>القطيف</b></td>
    @foreach($sa['القطيف'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>77</b></td>
    <td><b>الظهران</b></td>
    @foreach($sa['الظهران'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>78</b></td>
    <td><b>بقيق</b></td>
    @foreach($sa['بقيق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>

<tr>
    <td><b>79</b></td>
    <td><b>القحمة</b></td>
    @foreach($sa['القحمة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>80</b></td>
    <td><b>محايل</b></td>
    @foreach($sa['محايل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>81</b></td>
    <td><b>نمرة</b></td>
    @foreach($sa['نمرة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>82</b></td>
    <td><b>سبت العلاية</b></td>
    @foreach($sa['سبت العلاية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>83</b></td>
    <td><b>المندق</b></td>
    @foreach($sa['المندق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>84</b></td>
    <td><b>تبالة</b></td>
    @foreach($sa['تبالة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>85</b></td>
    <td><b>رنية</b></td>
    @foreach($sa['رنية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>86</b></td>
    <td><b>قيا</b></td>
    @foreach($sa['قيا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>87</b></td>
    <td><b>الخرمة</b></td>
    @foreach($sa['الخرمة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>88</b></td>
    <td><b>الكامل</b></td>
    @foreach($sa['الكامل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>89</b></td>
    <td><b>الحائط</b></td>
    @foreach($sa['الحائط'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>90</b></td>
    <td><b>البدع</b></td>
    @foreach($sa['البدع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>91</b></td>
    <td><b>القريات</b></td>
    @foreach($sa['القريات'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>92</b></td>
    <td><b>حزم الجلاميد</b></td>
    @foreach($sa['حزم الجلاميد'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>93</b></td>
    <td><b>الشملي</b></td>
    @foreach($sa['الشملي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>94</b></td>
    <td><b>الغزاله</b></td>
    @foreach($sa['الغزاله'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>95</b></td>
    <td><b>ضرية</b></td>
    @foreach($sa['ضرية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>96</b></td>
    <td><b>المخواة</b></td>
    @foreach($sa['المخواة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>97</b></td>
    <td><b>البجادية</b></td>
    @foreach($sa['البجادية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>98</b></td>
    <td><b>نفي</b></td>
    @foreach($sa['نفي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>99</b></td>
    <td><b>عيون الجواء</b></td>
    @foreach($sa['عيون الجواء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>100</b></td>
    <td><b>قصيباء</b></td>
    @foreach($sa['قصيباء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>101</b></td>
    <td><b>يدمة</b></td>
    @foreach($sa['يدمة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>102</b></td>
    <td><b>القيصومة</b></td>
    @foreach($sa['القيصومة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>103</b></td>
    <td><b>السعيرة</b></td>
    @foreach($sa['السعيرة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>104</b></td>
    <td><b>البدائع</b></td>
    @foreach($sa['البدائع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>105</b></td>
    <td><b>القوز</b></td>
    @foreach($sa['القوز'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>106</b></td>
    <td><b>رياض الخبراء</b></td>
    @foreach($sa['رياض الخبراء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>107</b></td>
    <td><b>الأرطاوية</b></td>
    @foreach($sa['الأرطاوية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>108</b></td>
    <td><b>صفوى</b></td>
    @foreach($sa['صفوى'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>109</b></td>
    <td><b>العيون</b></td>
    @foreach($sa['العيون'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>110</b></td>
    <td><b>الحناكية</b></td>
    @foreach($sa['الحناكية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>111</b></td>
    <td><b>ضرما</b></td>
    @foreach($sa['ضرما'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>112</b></td>
    <td><b>مهد الذهب</b></td>
    @foreach($sa['مهد الذهب'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>113</b></td>
    <td><b>المويه</b></td>
    @foreach($sa['المويه'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>114</b></td>
    <td><b>ظلم</b></td>
    @foreach($sa['ظلم'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>115</b></td>
    <td><b>قلوة</b></td>
    @foreach($sa['قلوة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>116</b></td>
    <td><b>ثادق</b></td>
    @foreach($sa['ثادق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>117</b></td>
    <td><b>حريملاء</b></td>
    @foreach($sa['حريملاء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>118</b></td>
    <td><b>حوطة بني تميم</b></td>
    @foreach($sa['حوطة بني تميم'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>119</b></td>
    <td><b>الحريق</b></td>
    @foreach($sa['الحريق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>120</b></td>
    <td><b>أحد المسارحة</b></td>
    @foreach($sa['أحد المسارحة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>121</b></td>
    <td><b>العويقيلة</b></td>
    @foreach($sa['العويقيلة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>122</b></td>
    <td><b>خيبر</b></td>
    @foreach($sa['خيبر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>123</b></td>
    <td><b>المجاردة</b></td>
    @foreach($sa['المجاردة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>124</b></td>
    <td><b>شرورة</b></td>
    @foreach($sa['شرورة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>125</b></td>
    <td><b>ظهران الجنوب</b></td>
    @foreach($sa['ظهران الجنوب'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>126</b></td>
    <td><b>صامطة</b></td>
    @foreach($sa['صامطة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>127</b></td>
    <td><b>صبيا</b></td>
    @foreach($sa['صبيا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>128</b></td>
    <td><b>بيش</b></td>
    @foreach($sa['بيش'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>129</b></td>
    <td><b>تثليث</b></td>
    @foreach($sa['تثليث'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>130</b></td>
    <td><b>النماص</b></td>
    @foreach($sa['النماص'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>131</b></td>
    <td><b>القنفذة</b></td>
    @foreach($sa['القنفذة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>132</b></td>
    <td><b>بلجرشي</b></td>
    @foreach($sa['بلجرشي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>134</b></td>
    <td><b>العقيق</b></td>
    @foreach($sa['العقيق'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>135</b></td>
    <td><b>الليث</b></td>
    @foreach($sa['الليث'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>136</b></td>
    <td><b>تربة</b></td>
    @foreach($sa['تربة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>137</b></td>
    <td><b>بدر</b></td>
    @foreach($sa['بدر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>138</b></td>
    <td><b>أملج</b></td>
    @foreach($sa['أملج'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>139</b></td>
    <td><b>الوجه</b></td>
    @foreach($sa['الوجه'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>140</b></td>
    <td><b>العلا</b></td>
    @foreach($sa['العلا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>141</b></td>
    <td><b>تيماء</b></td>
    @foreach($sa['تيماء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>142</b></td>
    <td><b>ضبا</b></td>
    @foreach($sa['ضبا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>143</b></td>
    <td><b>حقل</b></td>
    @foreach($sa['حقل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>144</b></td>
    <td><b>طبرجل</b></td>
    @foreach($sa['طبرجل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>145</b></td>
    <td><b>دومة الجندل</b></td>
    @foreach($sa['دومة الجندل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>146</b></td>
    <td><b>رفحا</b></td>
    @foreach($sa['رفحا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>147</b></td>
    <td><b>بقعاء</b></td>
    @foreach($sa['بقعاء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>148</b></td>
    <td><b>حفر الباطن</b></td>
    @foreach($sa['حفر الباطن'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>149</b></td>
    <td><b>السليل</b></td>
    @foreach($sa['السليل'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>150</b></td>
    <td><b>ليلى</b></td>
    @foreach($sa['ليلى'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>151</b></td>
    <td><b>القويعية</b></td>
    @foreach($sa['القويعية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>152</b></td>
    <td><b>المزاحمية</b></td>
    @foreach($sa['المزاحمية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>153</b></td>
    <td><b>رماح</b></td>
    @foreach($sa['رماح'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>154</b></td>
    <td><b>شقراء</b></td>
    @foreach($sa['شقراء'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>155</b></td>
    <td><b>تمير</b></td>
    @foreach($sa['تمير'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>156</b></td>
    <td><b>المذنب</b></td>
    @foreach($sa['المذنب'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>157</b></td>
    <td><b>البكيرية</b></td>
    @foreach($sa['البكيرية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>158</b></td>
    <td><b>النعيرية</b></td>
    @foreach($sa['النعيرية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>159</b></td>
    <td><b>الخفجي</b></td>
    @foreach($sa['الخفجي'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>160</b></td>
    <td><b>العيص</b></td>
    @foreach($sa['العيص'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>161</b></td>
    <td><b>مرات</b></td>
    @foreach($sa['مرات'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>162</b></td>
    <td><b>المظيلف</b></td>
    @foreach($sa['المظيلف'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>163</b></td>
    <td><b>سلوى</b></td>
    @foreach($sa['سلوى'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>164</b></td>
    <td><b>مركز حدود الحديثة</b></td>
    @foreach($sa['مركز حدود الحديثة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>165</b></td>
    <td><b>الدرعية</b></td>
    @foreach($sa['الدرعية'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>166</b></td>
    <td><b>ضمد</b></td>
    @foreach($sa['ضمد'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>167</b></td>
    <td><b>فيفا</b></td>
    @foreach($sa['فيفا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>168</b></td>
    <td><b>القرى</b></td>
    @foreach($sa['القرى'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>169</b></td>
    <td><b>الخرج</b></td>
    @foreach($sa['الخرج'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>170</b></td>
    <td><b>وادي الفرع</b></td>
    @foreach($sa['وادي الفرع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>171</b></td>
    <td><b>الريث</b></td>
    @foreach($sa['الريث'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>172</b></td>
    <td><b>رجال المع</b></td>
    @foreach($sa['رجال المع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>173</b></td>
    <td><b>ميسان</b></td>
    @foreach($sa['ميسان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>175</b></td>
    <td><b>أضم</b></td>
    @foreach($sa['أضم'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>176</b></td>
    <td><b>الحرث</b></td>
    @foreach($sa['الحرث'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>177</b></td>
    <td><b>قرية العليا</b></td>
    @foreach($sa['قرية العليا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>178</b></td>
    <td><b>الحمنة</b></td>
    @foreach($sa['الحمنة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>179</b></td>
    <td><b>سيهات</b></td>
    @foreach($sa['سيهات'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>180</b></td>
    <td><b>وثيلان</b></td>
    @foreach($sa['وثيلان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>181</b></td>
    <td><b>ساجر</b></td>
    @foreach($sa['ساجر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>182</b></td>
    <td><b>ابو عروة</b></td>
    @foreach($sa['ابو عروة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>183</b></td>
    <td><b>حدة</b></td>
    @foreach($sa['حدة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>184</b></td>
    <td><b>وادي الدواسر</b></td>
    @foreach($sa['وادي الدواسر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>185</b></td>
    <td><b>ثريبان</b></td>
    @foreach($sa['ثريبان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>186</b></td>
    <td><b>أم الدوم</b></td>
    @foreach($sa['أم الدوم'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>187</b></td>
    <td><b>القريع</b></td>
    @foreach($sa['القريع'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>188</b></td>
    <td><b>السحن</b></td>
    @foreach($sa['السحن'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>189</b></td>
    <td><b>راس تنورة</b></td>
    @foreach($sa['راس تنورة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>190</b></td>
    <td><b>المبرز</b></td>
    @foreach($sa['المبرز'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>191</b></td>
    <td><b>الفرشة</b></td>
    @foreach($sa['الفرشة'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>192</b></td>
    <td><b>بللسمر</b></td>
    @foreach($sa['بللسمر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>193</b></td>
    <td><b>الجفر</b></td>
    @foreach($sa['الجفر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>194</b></td>
    <td><b>الهدا</b></td>
    @foreach($sa['الهدا'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>195</b></td>
    <td><b>الحدبان</b></td>
    @foreach($sa['الحدبان'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
<tr>
    <td><b>196</b></td>
    <td><b>البشائر</b></td>
    @foreach($sa['البشائر'] as $data)
        <td>{{$data}}</td>
    @endforeach
</tr>
--}}
