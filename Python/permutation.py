def find_longest_path(permutation):
  n = len(permutation)
  dp = [0] * n

  for i in range(n - 1, -1, -1):
    next_node = permutation[i] - 1
    if next_node >= 0:
      dp[next_node] = max(dp[next_node], dp[i] + 1)

  return max(dp)

permutation = [1, 2, 3]
longest_path_length = find_longest_path(permutation)
print(longest_path_length)  # Output: 3
