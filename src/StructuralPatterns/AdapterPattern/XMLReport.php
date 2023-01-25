<?php

namespace Src\StructuralPatterns\AdapterPattern;

class XMLReport
{
    public function buildXML(): string {
        return '<?xml version="1.0" encoding="UTF-8"?>
                    <root>
	                    <item>
		                    <name>iPhone</name>
		                    <price>1000</price>
		                    <count>23</count>
	                    </item>
	                    <item>
		                    <name>Xiaomi</name>
		                    <price>500</price>
		                    <count>65</count>
	                    </item>
	                    <item>
		                    <name>Samsung</name>
		                    <price>800</price>
		                    <count>34</count>
	                    </item>
                    </root>';
    }
}
