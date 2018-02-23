# Replace
1.
```php
     * @param  string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param  string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param  string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param  string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param  int $searchCriteriaPageSize Page size. (optional)
     * @param  int $searchCriteriaCurrentPage Current page. (optional)
```
To:
```php
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface $searchCriteria Search criteria. (required)
```

2.
```php
$searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null
```
To:
```php
$searchCriteria
```

3.
```php
$searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage
```
To:
```php
$searchCriteria
```

4.
```php
        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($searchCriteriaCurrentPage);
        }
```
OR
```php
        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][field]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][value]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][conditionType]'] = ObjectSerializer::toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][0][field]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][0][direction]'] = ObjectSerializer::toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = ObjectSerializer::toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = ObjectSerializer::toQueryValue($searchCriteriaCurrentPage);
        }
```
To:
```php
		if ($searchCriteria instanceof \SpringImport\Swagger\Magento2\Client\Model\FrameworkSearchCriteriaInterface) {
		    $queryParams['searchCriteria'] = json_decode($searchCriteria->__toString());
		} else {
		    $queryParams['searchCriteria'] = $searchCriteria;
		}
```

5.
```php
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
```
To:
```php
        //$query = \GuzzleHttp\Psr7\build_query($queryParams);
        $query = \http_build_query($queryParams);
```


# Regular expr. replace
1.
```php
     \* \@param  string \$searchCriteriaFilterGroupsFiltersField Field \(optional\)\n     \* \@param  string \$searchCriteriaFilterGroupsFiltersValue Value \(optional\)\n     \* \@param  string \$searchCriteriaFilterGroupsFiltersConditionType Condition type \(optional\)\n     \* \@param  string \$searchCriteriaSortOrdersField Sorting field\. \(optional\)\n     \* \@param  string \$searchCriteriaSortOrdersDirection Sorting direction\. \(optional\)\n     \* \@param  int \$searchCriteriaPageSize Page size\. \(optional\)\n     \* \@param  int \$searchCriteriaCurrentPage Current page\. \(optional\)
```
To:
```php
     \* \@param \\SpringImport\\Swagger\\Magento2\\Client\\Model\\FrameworkSearchCriteriaInterface \$searchCriteria Search criteria\. \(required\)
```

2.
```php
\$searchCriteriaFilterGroupsFiltersField \= null\, \$searchCriteriaFilterGroupsFiltersValue \= null\, \$searchCriteriaFilterGroupsFiltersConditionType \= null\, \$searchCriteriaSortOrdersField \= null\, \$searchCriteriaSortOrdersDirection \= null\, \$searchCriteriaPageSize \= null\, \$searchCriteriaCurrentPage \= null
```
To:
```php
\$searchCriteria
```

3.
```php
\$searchCriteriaFilterGroupsFiltersField\, \$searchCriteriaFilterGroupsFiltersValue\, \$searchCriteriaFilterGroupsFiltersConditionType\, \$searchCriteriaSortOrdersField\, \$searchCriteriaSortOrdersDirection\, \$searchCriteriaPageSize\, \$searchCriteriaCurrentPage
```
To:
```php
\$searchCriteria
```

4.
```php
        \/\/ query params\n        if \(\$searchCriteriaFilterGroupsFiltersField \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[filterGroups\]\[\]\[filters\]\[\]\[field\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaFilterGroupsFiltersField\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaFilterGroupsFiltersValue \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[filterGroups\]\[\]\[filters\]\[\]\[value\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaFilterGroupsFiltersValue\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaFilterGroupsFiltersConditionType \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[filterGroups\]\[\]\[filters\]\[\]\[conditionType\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaFilterGroupsFiltersConditionType\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaSortOrdersField \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[sortOrders\]\[\]\[field\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaSortOrdersField\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaSortOrdersDirection \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[sortOrders\]\[\]\[direction\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaSortOrdersDirection\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaPageSize \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[pageSize\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaPageSize\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaCurrentPage \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[currentPage\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaCurrentPage\)\;\n        \}
```
OR
```php
        \/\/ query params\n        if \(\$searchCriteriaFilterGroupsFiltersField \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[filterGroups\]\[0\]\[filters\]\[0\]\[field\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaFilterGroupsFiltersField\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaFilterGroupsFiltersValue \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[filterGroups\]\[0\]\[filters\]\[0\]\[value\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaFilterGroupsFiltersValue\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaFilterGroupsFiltersConditionType \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[filterGroups\]\[0\]\[filters\]\[0\]\[conditionType\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaFilterGroupsFiltersConditionType\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaSortOrdersField \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[sortOrders\]\[0\]\[field\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaSortOrdersField\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaSortOrdersDirection \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[sortOrders\]\[0\]\[direction\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaSortOrdersDirection\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaPageSize \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[pageSize\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaPageSize\)\;\n        \}\n        \/\/ query params\n        if \(\$searchCriteriaCurrentPage \!\=\= null\) \{\n            \$queryParams\[\'searchCriteria\[currentPage\]\'\] \= ObjectSerializer\:\:toQueryValue\(\$searchCriteriaCurrentPage\)\;\n        \}
```
To:
```php
        if \(\$searchCriteria instanceof \\SpringImport\\Swagger\\Magento2\\Client\\Model\\FrameworkSearchCriteriaInterface\) \{\n\	\	    \$queryParams\[\'searchCriteria\'\] \= json_decode\(\$searchCriteria\-\>__toString\(\)\)\;\n\	\	\} else \{\n\	\	    \$queryParams\[\'searchCriteria\'\] \= \$searchCriteria\;\n\	\	\}
```

5.
```php
        \$query \= \\GuzzleHttp\\Psr7\\build_query\(\$queryParams\)\;
```
To:
```php
        \/\/\$query \= \\GuzzleHttp\\Psr7\\build_query\(\$queryParams\)\;\n        \$query \= \\http_build_query\(\$queryParams\)\;
```
